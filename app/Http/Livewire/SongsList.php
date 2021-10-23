<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Songs;

class SongsList extends Component
{
    public function render()
    {
        return view('livewire.songs-list',[
            'songs' => Songs::latest()->get()
        ]);
    }
}
