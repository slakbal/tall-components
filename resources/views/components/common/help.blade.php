@props(['value'])

<p {{ $attributes->merge(['class' => 'block text-sm text-gray-700 dark:text-gray-200 mt-1']) }}>{{ $value ?? $slot }}</p>
