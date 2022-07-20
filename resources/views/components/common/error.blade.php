@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm font-medium text-red-600 mt-1']) }}>{{ $message }}</p>
@enderror