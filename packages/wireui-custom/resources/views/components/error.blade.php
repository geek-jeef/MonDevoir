@error($name)
    <p {{ $attributes->merge(['class' => 'mt-2 text-sm text-wire_negative-600']) }}>
        {{ $message }}
    </p>
@enderror
