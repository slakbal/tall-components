@props(['name', 'label' => null, 'limit' => 250, 'help' => null])

<div x-data="{
        element: $refs.{{$name}}Area,
        limit: $el.dataset.limit,
        remaining: 0,
        get limitText() {
            remainingLength = this.limit - this.element.value.length;
            this.remaining = (remainingLength > 0) ? remainingLength : 0;
            return (remainingLength > 0) ? this.element.value : this.element.value.substring(0,this.limit);
        }    
    }"
    data-limit="{{ $limit }}"
    >
    @if($label)<x-tall-components::common.label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::text.field x-ref="{{$name}}Area" x-on:keyup="$el.value = limitText" {{$attributes}}></x-tall-components::text.field>
    <p x-ref="remaining">You have <span x-text="remaining"></span> characters remaining.</p>
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <x-tall-components::common.error for="{{$name}}"/>    
</div>