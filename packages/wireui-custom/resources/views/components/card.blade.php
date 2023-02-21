<div class="{{ $cardClasses }}">
    @if ($header)
        {{ $header }}
    @elseif ($title || $action)
        <div class="{{ $headerClasses }}">
            <h3 class="font-medium whitespace-normal text-md text-wire_secondary-700 dark:text-wire_secondary-400">{{ $title }}</h3>

            @if ($action)
                {{ $action }}
            @endif
        </div>
    @endif

    <div {{ $attributes->merge(['class' => "{$padding} text-wire_secondary-700 grow dark:text-wire_secondary-400"]) }}>
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="{{ $footerClasses }}">
            {{ $footer }}
        </div>
    @endif
</div>
