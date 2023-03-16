<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Category;
use Livewire\WithFileUploads;

class Expense extends ModalComponent
{
    use WithFileUploads;
 

    // public $photo;
 
    // public function updatedPhoto()
    // {
    //     $this->validate([
    //         'photo' => 'image|max:1024',
    //     ]);
    // }


    public function render()
    {
        $cat = Category::all();
        return view('livewire.expense', compact ('cat'));
    }

    public function rend()
    {
        $cat = Category::all();
        return view('livewire.add');
    }
 }
