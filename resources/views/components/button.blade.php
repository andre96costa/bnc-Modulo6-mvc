@aware(['type' => 'error'])

<div
    {{ $attributes->merge(['type' => 'button'])}}
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm"
>
    @if ($type === 'success')
        Enviar {{ $andre }}
    @else
        Error   
    @endif
</div>