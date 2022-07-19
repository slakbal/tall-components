<?php

namespace Slakbal\TallComponents\View\Components\Date;

use Illuminate\View\Component;

class DateTimePicker extends Component
{
    public function getConfiguration()
    {
        return [
            'dateFormat' => 'Y-m-d H:i:S', //the format of the datetime that is sent to the server
            'enableTime' => true,
            'time_24hr' => true,
            'altInput' => true,
            'altFormat' => config('tall-components.datetimepicker.altDateTimeFormat', 'd M Y, H:i') //the format of the datetime that is shown to the user
        ];
    }

    public function render()
    {
        return view('tall-components::date.datetime-picker');
    }
}
