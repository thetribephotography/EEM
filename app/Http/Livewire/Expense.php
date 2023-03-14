<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Expense extends Component
{
    public function render()
    {
        $cat = Category::all();
        return view('livewire.expense');
    }
}
