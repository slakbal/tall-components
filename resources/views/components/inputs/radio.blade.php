@props(['name', 'label' => null, 'value' => null, 'help' => null])

<div>
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <div class="flex items-center space-x-2">
        <input type="radio" id="{{$name}}" name="{{$name}}" value="{{$value}}" {!! $attributes->merge(['class' => 'w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600']) !!}>
        <x-tall-components::common.label for="{{$name}}" :value="$label" />
    </div>
    <x-tall-components::common.error for="{{$name}}"/>
</div>