@props(['value'])

<p {{ $attributes->merge(['class' => 'text-sm text-slate-400 dark:text-slate-200 mt-1']) }}>{{ $value ?? $slot }}</p>
