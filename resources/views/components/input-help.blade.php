@props(['value'])

<p {{ $attributes->merge(['class' => 'text-sm text-slate-400 mt-1']) }}>{{ $value ?? $slot }}</p>
