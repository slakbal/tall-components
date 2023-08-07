@props(['options' => null])

<select {!! $attributes->merge(['class' => 'form-input block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    @if ($options !== null)
        @forelse ($options as $key => $option)
            <option value="{{ strval($key) }}">
                {{ $option }}
            </option>
        @empty
            <option disabled>
                {{ __('No Options Available') }}
            </option>
        @endforelse
    @else {{ $slot }} @endif
</select>
