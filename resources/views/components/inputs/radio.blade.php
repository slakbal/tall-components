@props(['name', 'label' => null, 'value' => null, 'help' => null])

<div>
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <div class="flex items-center space-x-2">
        <input type="radio" id="{{$name}}" name="{{$name}}" value="{{$value}}" {!! $attributes->merge(['class' => 'w-5 h-5']) !!}>
        <x-tall-components::common.label for="{{$name}}" :value="$label" />
    </div>
    <x-tall-components::common.error for="{{$name}}"/>
</div>