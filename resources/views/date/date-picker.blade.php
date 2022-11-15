{{-- {!! $attributes->merge(['class' => 'form-input rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!} --}}
<div wire:ignore>
    <input  x-data
            x-init="flatpickr($refs.input, {{json_encode($getConfiguration())}});" 
            x-ref="input" 
            x-ref="DateInput"             
            type="text" 
            data-input
            {!! $attributes->merge(['class' => 'form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) !!}
            />
</div>

@pushOnce('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endPushOnce