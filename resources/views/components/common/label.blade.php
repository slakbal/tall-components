@props(['value','sublabel' => null])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700']) }}>
    {{ $value ?? $slot }} @if($sublabel)<span class="text-xs italic text-orange-500">{{ $sublabel }}</span>@endif
</label>
