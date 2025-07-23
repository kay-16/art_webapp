@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'place-content-center w-1/2 custom-border custom-border:focus text-[#841A26] focus:outline-none placeholder:text-[#841A26]/50 font-neuton']) }}>
