@props(['name', 'label' => null, 'help' => null])

<div>
    @if(!is_null($label))<x-tall-components::input-label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::datetime-picker {{$attributes}} />
    @if($help)<x-tall-components::input-help for="{{$name}}" :value="$help" />@endif
    <x-tall-components::input-error for="{{$name}}"/>
</div>