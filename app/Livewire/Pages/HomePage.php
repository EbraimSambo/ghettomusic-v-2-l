<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Home')]
    public function render()
    {
        return view('livewire.pages.home-page')->layout('layouts.layout');
    }
}
