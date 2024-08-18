

<input {{ $attributes->class([
    'form-control', 
    'mb-3'
])->merge([
    'type' => 'text',
    'value' => request()->old($attributes->get('name'))
]) }}>