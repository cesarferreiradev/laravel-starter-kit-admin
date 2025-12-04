@props([
    'legend' => ''
])

<div>
    <fieldset {{ $attributes->merge([
            'class' => "bg-white px-10 py-10 rounded-md border border-slate-200"
        ])
     }}
    >
        <legend class="font-semibold">{{ $legend }}</legend>

        {{ $slot }}
    </fieldset>
</div>
