<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Expense extends Component
{
    use WithFileUploads;
 

    public $photo;
 
    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }


    public function render()
    {
        $cat = Category::all();
        return view('livewire.expense', compact ('cat'));
    }
}
