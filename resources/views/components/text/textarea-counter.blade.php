@props(['name', 'key', 'label' => null, 'limit' => 250, 'help' => null])

<div x-data="{
        element: $refs.{{$name}}Area,
        limit: $el.dataset.limit,
        remaining: $el.dataset.limit,
        get limitText() {
            remainingLength = this.limit - this.element.value.length;
            this.remaining = (remainingLength > 0) ? remainingLength : 0;
            return (remainingLength > 0) ? this.element.value : this.element.value.substring(0,this.limit);
        }    
    }"
    data-limit="{{ $limit }}"
    >
    @if($label)<x-input-label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::text.field x-ref="{{$name}}Area" wire:key="$key" x-on:keyup="$el.value = limitText" {{$attributes}}></x-tall-components::text.field>
    <p x-ref="remaining">You have <span x-text="remaining"></span> characters remaining.</p>
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <x-input-error class="mt-2" :messages="$errors->get($name)" />    
</div>
{{--     x-init="$nextTick(() => {remainingLength = limit - element.value.length})" --}}