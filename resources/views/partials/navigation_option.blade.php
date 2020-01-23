
<div class="navbar-brand {{ Request::is("{$option}*") ? 'active' : '' }}" style="padding: 10px;">
    <a href="{{ url($option == 'recurring' ? 'recurring_invoice' : $option) }}"
        style="font-size:16px;padding-top:6px; padding-bottom:6px;font-weight: 600;"
        class="nav-link ">
        {{ ($option == 'recurring_invoices') ? trans('texts.recurring') : mtrans($option) }}
        {!! Utils::isTrial() && in_array($option, ['reports']) ? '&nbsp;<sup>' . trans('texts.pro') . '</sup>' : '' !!}
    </a>
</div>

