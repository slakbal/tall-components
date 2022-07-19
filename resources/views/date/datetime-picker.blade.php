<div wire:ignore>
    <input x-data x-init="flatpickr($refs.input, {{json_encode($getConfiguration())}});" x-ref="input" type="text" x-ref="DateTimeInput" data-input {{ $attributes }}>
</div>

@pushOnce('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endPushOnce