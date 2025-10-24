<?php

namespace Botble\Ecommerce\Notifications;

use Botble\Base\Facades\EmailHandler;
use Botble\Ecommerce\Models\CustomerDeletionRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class SendVerificationCodeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public CustomerDeletionRequest $deletionRequest)
    {
    }

    public function via(): array
    {
        return ['mail'];
    }

    public function toMail(): MailMessage
    {
        $customer = $this->deletionRequest->customer;

        $emailHandler = EmailHandler::setModule(ECOMMERCE_MODULE_SCREEN_NAME)
            ->setType('plugins')
            ->setTemplate('customer-deletion-verification-code')
            ->addTemplateSettings(ECOMMERCE_MODULE_SCREEN_NAME, config('plugins.ecommerce.email', []))
            ->setVariableValue('customer_name', $customer->name)
            ->setVariableValue('customer_email', $customer->email)
            ->setVariableValue('verification_code', $this->deletionRequest->verification_code);

        return (new MailMessage())
            ->view(['html' => new HtmlString($emailHandler->getContent())])
            ->subject($emailHandler->getSubject());
    }
}
