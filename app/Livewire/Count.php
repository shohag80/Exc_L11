<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        if ($this->count != 0) {
            $this->count--;
        }
    }

    public function default()
    {
        $this->count = 0;
    }
    
    public function render()
    {
        return view('livewire.count');
    }
}
