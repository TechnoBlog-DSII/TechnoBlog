@props(['value'])


<label {{ $attributes->merge(['class' => 'block font-medium text-gray-100 text-base scale-120 text-center']) }}>
    {{ $value ?? $slot }}
</label>
