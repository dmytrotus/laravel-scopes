<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::with('user');
        // $items = Items::where('name', 'LIKE', "%item_25%")
        // ->orWhere('name', 'LIKE', "%item_12%")
        // ->orWhere('name', 'LIKE', "%item_17%");

        $items = $items->paginate(100);

        return view('items')->with(compact('items'));
    }
}
