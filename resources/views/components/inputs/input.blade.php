@props(['name', 'label' => null, 'help' => null])

<div>
    @if($label)<x-tall-components::inputs.label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::inputs.field {{$attributes}} />
    @if($help)<x-tall-components::inputs.help for="{{$name}}" :value="$help" />@endif
    <x-tall-components::inputs.error for="{{$name}}"/>
</div>