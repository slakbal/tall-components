@props(['name', 'label' => null, 'help' => null])

<div>
    @if($label)<x-input-label for="{{$name}}" :value="$label" />@endif
    <x-tall-components::time-picker {{$attributes}} />
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>