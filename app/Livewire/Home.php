<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $TabActive = 0;
    public $SliderActive = 1;

    public function render()
    {
        return view('livewire.home', [
            'TabActive' => $this->TabActive,
            'SliderActive' => $this->SliderActive
        ]);

    }

    public function activeTab($a)
    {
        $this->TabActive = $a;
    }

    public function activeSlider($a)
    {
        $this->SliderActive = $a;
    }



}
