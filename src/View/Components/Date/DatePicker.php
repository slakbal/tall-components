<?php

namespace Slakbal\TallComponents\View\Components\Date;

use Illuminate\View\Component;

class DatePicker extends Component
{
    public function getConfiguration()
    {
        return [
            // 'dateFormat' => 'Y-m-d H:i:S', //the format of the datetime that is sent to the server
            'dateFormat' => 'Z',
            'enableTime' => false,
            'time_24hr' => true,
            'altInput' => true,
            'altFormat' => config('tall-components.datetimepicker.altDateFormat', 'd M Y') //the format of the datetime that is shown to the user
        ];
    }

    public function render()
    {
        return view('tall-components::date.date-picker');
    }
}
