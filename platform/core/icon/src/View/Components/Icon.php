<?php

namespace Botble\Icon\View\Components;

use Botble\Icon\Facades\Icon as IconFacade;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Icon extends Component
{
    public function __construct(
        public string $name,
        public ?string $size = null
    ) {
    }

    public function render(): Closure
    {
        return function (array $data): Htmlable {
            $attributes = $data['attributes']->getIterator()->getArrayCopy();

            $class = trim(($this->size ? "icon-{$this->size}" : '') . ' ' . ($attributes['class'] ?? ''));
            unset($attributes['class']);

            if (str_starts_with($this->name, 'ti ti-')) {
                $class .= ' svg-icon-' . str_replace(' ', '-', $this->name);

                $svg = IconFacade::render(
                    Str::after($this->name, 'ti ti-'),
                    ['class' => trim($class), ...$attributes]
                );

                return $svg instanceof Htmlable ? $svg : new HtmlString($svg);
            }

            return new HtmlString(
                sprintf('<i %s></i>', $data['attributes']->class(trim("$this->name $class")))
            );
        };
    }

    public function resolveView(): Closure|Htmlable|ViewContract
    {
        $view = $this->render();

        return function (array $data = []) use ($view): Htmlable {
            $result = $view($data);

            return $result instanceof Htmlable ? $result : new HtmlString($result);
        };
    }
}
