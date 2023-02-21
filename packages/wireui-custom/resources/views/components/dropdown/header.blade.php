<div class="@if($separator) border-t border-wire_secondary-200 dark:border-wire_secondary-600 @endif">
    <h6 {{ $attributes->merge(['class' => $classes]) }}>
        {{ $label }}
    </h6>

    {{ $slot }}
</div>
