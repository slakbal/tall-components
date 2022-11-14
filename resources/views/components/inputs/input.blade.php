@props(['name', 'label' => null, 'sublabel' => null, 'help' => null])

<div>
    @if($label)<x-tall-components::common.label for="{{$name}}" :value="$label" :sublabel="$sublabel"/>@endif
    <x-tall-components::inputs.field {{$attributes}} />
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <x-tall-components::common.error for="{{$name}}"/>
</div>