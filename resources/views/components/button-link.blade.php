@props(["color" => "primary"])

<a {{ $attributes->class([
        "btn btn-{$color}"
    ])->merge([
        'type' => 'button'
    ]) }}>

    {{ $slot }}

</a>