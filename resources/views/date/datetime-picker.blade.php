<div wire:ignore>
    <input  x-data
            x-init="flatpickr($refs.input, {{json_encode($getConfiguration())}});" 
            x-ref="input" 
            x-ref="DateTimeInput"             
            type="text" 
            data-input
            {!! $attributes->merge(['class' => 'form-input rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
            />
</div>

@pushOnce('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endPushOnce