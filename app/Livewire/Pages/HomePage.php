<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Home')]
    public function render()
    {
        return view('livewire.pages.home-page',[
            'new' => Music::orderBy('id','desc')->paginate(8),
        ])->layout('layouts.layout');
    }
}
