@props(['options' => null])

<select {!! $attributes->merge(['class' => 'form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) !!}>
    @if ($options !== null)
        @forelse ($options as $key => $option)
            <option value="{{ $key }}">
                {{ $option }}
            </option>
        @empty
            <option disabled>
                {{ __('No Options Available') }}
            </option>
        @endforelse
    @else {{ $slot }} @endif
</select>