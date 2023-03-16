<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Expense;
use App\Models\Category;
use App\Models\User;


class ExpenseController extends Controller
{

    public function index(){
        return view ('test');
    }


    public function register(Request $request){
        $validated = $request->validate([
            'category' => 'required',
            'price' => 'required',
            'date' => 'required',
            'receipt' => 'required',
            'description' => 'required',
        ]);

        $user = Auth::id();
        $status = 1;
        $path = $this->UploadFile($request->file('receipt'), $file_name);

        $store = new Expense;

        $store->category = $request->category;
        $store->price = $request->price;
        $store->category_id = $request->category;
        $store->user_id = $user;
        $store->receipt = $path;
        $store->status = $status;
        $store->description = $request->description;

    }

}
