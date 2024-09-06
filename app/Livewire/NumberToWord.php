<?php

namespace App\Livewire;

use App\Http\Controllers\Controller;
use Livewire\Component;

class NumberToWord extends Component
{
    public $number = '';

    public function render()
    {
        return view('livewire.number-to-word',
        [
            'toword' => Controller::numberToWords($this->number),
        ]);
    }
}
