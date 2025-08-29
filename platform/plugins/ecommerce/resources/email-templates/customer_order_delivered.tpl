{{ header }}

<div class="bb-main-content">
    <table class="bb-box" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td class="bb-content bb-pb-0" align="center">
                    <table class="bb-icon bb-icon-lg bb-bg-blue" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td valign="middle" align="center">
                                    <img src="{{ 'truck-delivery' | icon_url }}" class="bb-va-middle" width="40" height="40" alt="Icon">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h1 class="bb-text-center bb-m-0 bb-mt-md">{{ 'plugins/ecommerce::email-templates.customer_order_delivered_title' | trans }}</h1>
                </td>
            </tr>
            <tr>
                <td class="bb-content">
                    <p>{{ 'plugins/ecommerce::email-templates.customer_order_delivered_greeting' | trans({'customer_name': customer_name}) }}</p>
                    <p>{{ 'plugins/ecommerce::email-templates.customer_order_delivered_message' | trans }}</p>
                    {% if order_delivery_notes %}
                        <p><i>" {{ order_delivery_notes }} "</i></p>
                    {% endif %}
                </td>
            </tr>
            {% if product_list %}
                <tr>
                    <td class="bb-content bb-pt-0">
                        <h4>{{ 'plugins/ecommerce::email-templates.customer_order_delivered_order_summary' | trans }}</h4>
                        {{ product_list }}

                        {% if order_note %}
                        <div>{{ 'plugins/ecommerce::email-templates.customer_order_delivered_note' | trans }}: {{ order_note }}</div>
                        {% endif %}
                    </td>
                </tr>
            {% endif %}
        </tbody>
    </table>
</div>

{{ footer }}
