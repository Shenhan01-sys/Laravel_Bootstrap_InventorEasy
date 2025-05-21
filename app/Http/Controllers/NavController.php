<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
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

    public function insertItems(Request $request)
    {
        if ($request->isMethod('post')) 
        {
            $validatedData = $request->validate([
                'name_Item' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'quantity' => 'required|integer|min:0',
                'Available' => 'required|string',
                'Id_Category' => 'required|string',
                'link' => 'required|string|max:255',
            ]);

            try 
            {
                $item = new Item();
                $call_id_item = Item::orderBy('id_Item', 'desc')->last();
                $item->id_Item = $call_id_item->id_Item + 1;
                $item->name_Item = $validatedData['name_Item'];
                $item->description = $validatedData['description'];
                $item->quantity = $validatedData['quantity'];
                $item->id_Category = $validatedData['id_Category'];
                $item->available = $validatedData['available'];
                $item->link = $validatedData['link'];
                $item->save();

                return redirect()->back()->with('success', 'Item inserted successfully.');
            } 
            
            catch (\Exception $e) 
            {
                return redirect()->back()->with('error', 'Failed to insert item: ' . $e->getMessage());
            }
        }

        $categories = Category::all();
        return view('insertItems', compact('categories'));
    }
}
