{{-- {!! $attributes->merge(['class' => 'form-input rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!} --}}
<div wire:ignore>
    <input  x-data
            x-init="flatpickr($refs.input, {{json_encode($getConfiguration())}});" 
            x-ref="input" 
            x-ref="DateInput"             
            type="text" 
            data-input
            {!! $attributes->merge(['class' => 'form-input block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}
            />
</div>

@pushOnce('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endPushOnce
