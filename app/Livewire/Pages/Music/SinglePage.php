<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Component;

class SinglePage extends Component
{
    public $music;
    
    public function mount($slug) {
        $this->music = Music::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.pages.music.single-page')->layout('layouts.layout',['title'=>'Mostrar']);
    }
}
