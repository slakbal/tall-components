<?php

namespace Slakbal\TallComponents\View\Components\Date;

use Illuminate\View\Component;

class TimePicker extends Component
{
    public function getConfiguration()
    {
        return [
            // 'dateFormat' => 'Y-m-d H:i:S', //the format of the datetime that is sent to the server   
            // 'dateFormat' => 'H:i',
            'dateFormat' => 'Z',
            'enableTime' => true,
            'time_24hr' => true,
            'altInput' => true,
            'noCalendar' => true,
            'altFormat' => config('tall-components.datetimepicker.altTimeFormat', 'H:i') //the format of the datetime that is shown to the user
        ];
    }

    public function render()
    {
        return view('tall-components::date.time-picker');
    }
}
