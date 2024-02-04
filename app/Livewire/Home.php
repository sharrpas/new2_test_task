<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $TabActive = 0;
    public $SliderActive = 2;

    public $slider1 = 'top-[-50px] left-[-100px]';
    public $slider2 = 'top-[200px] left-[100px]  scale-125';
    public $slider3 = 'top-[450px] left-[-100px]';

    public function render()
    {
        return view('livewire.home', [
            'TabActive' => $this->TabActive,
            'SliderActive' => $this->SliderActive,

            'slider1' => $this->slider1,
            'slider2' => $this->slider2,
            'slider3' => $this->slider3,
        ]);

    }

    public function activeTab($a)
    {
        $this->TabActive = $a;

    }

    public function activeSlider($a)
    {
        $this->SliderActive = $a;
        if ($a==1){
            $this->slider2 =  'top-[-50px] left-[-100px]';
            $this->slider1 = 'top-[200px] left-[100px] scale-125';
            $this->slider3 = 'top-[450px] left-[-100px]';
        }
        if ($a==2){
            $this->slider1 = 'top-[-50px] left-[-100px]';
            $this->slider2 = 'top-[200px] left-[100px] scale-125';
            $this->slider3 = 'top-[450px] left-[-100px]';
        }
        if ($a==3){
            $this->slider1 = 'top-[-50px] left-[-100px]';
            $this->slider3 = 'top-[200px] left-[100px] scale-125';
            $this->slider2 = 'top-[450px] left-[-100px]';
        }
    }




}
