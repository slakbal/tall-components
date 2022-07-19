{{-- wire:ignore --}}
<div x-data="datepicker(@entangle($attributes->wire('model')),@js($getConfiguration()))" class="relative">
    <input type="text" x-ref="DateTimeInput" x-model="value">
    {{-- <input type="text" x-ref="DateTimeInput" x-model="value" {{ $attributes->merge(['class' => 'block mt-1 w-full']) }} /> --}}
</div>

@pushOnce('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('datepicker', (model, config) => ({
                value: model,
                init(){
                    this.pickr = flatpickr(this.$refs.DateTimeInput, config)
                },
            }))
        })
    </script>
@endPushOnce