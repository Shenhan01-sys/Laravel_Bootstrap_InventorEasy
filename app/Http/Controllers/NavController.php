<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Schema;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function master_data()
    {
        return view('master_data');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function listOfItems()
    {
        $items = Item::all();
        $columns = Schema::getColumnListing('items');
        return view('listOfItems', compact('items', 'columns'));
    }
}
