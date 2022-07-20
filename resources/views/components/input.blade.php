@props(['name', 'label' => null, 'help' => null])

<div>
    @if($label)<x-tall-components::input-label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::input-field {{$attributes}} />
    @if($help)<x-tall-components::input-help for="{{$name}}" :value="$help" />@endif
    <x-tall-components::input-error for="{{$name}}"/>
</div>