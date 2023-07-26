@props(['name', 'label' => null, 'help' => null])

<div>
    @if($label)<x-input-label for="{{$name}}" :value="$label" />@endif
    <input x-mask:dynamic="$money($input, '.', ' ')" {!! $attributes->merge(['class' => 'form-input block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!} {{$attributes}} >
    @if($help)<x-tall-components::common.help for="{{$name}}" :value="$help" />@endif
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>