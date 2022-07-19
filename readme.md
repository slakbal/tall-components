# tall-components

## DateTime Picker

- Make sure the "header" stack is added to the layout file

```html
    <head>
        …

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Stacks -->
        @stack('header')

    </head>
```

Now the component can be user together with Livewire like so:

```html
    <div>
        <x-label for="start_at" :value="__('Start At')" />
        <x-datetime-picker wire:model="start_at"/> 
        <x-input-error for="start_at"/>
    </div>
    <div>
        <x-label for="start_at" :value="__('Start At')" />
        <x-datetime-picker wire:model.prevent="start_at"/> 
        <x-input-error for="start_at"/>
    </div>
```

Possible validation rulse can be like:

```php
    public function rules()
    {
        return [
            'start_at' => ['required', 'date', 'before_or_equal:end_at', 'date_format:Y-m-d H:i:s'],
            'end_at' => ['required', 'date', 'after_or_equal:start_at', 'date_format:Y-m-d H:i:s'],
        ];
    }
```

## Date Picker

//Todo

## Time Picker

//Todo