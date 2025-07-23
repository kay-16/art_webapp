@props(['value'])

<label {{ $attributes->merge(['class' => 'block tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm']) }}>
    {{ $value ?? $slot }}
</label>
