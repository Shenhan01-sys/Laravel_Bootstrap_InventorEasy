<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Schema;

class itemController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil parameter limit dari query string
        $limit = $request->query('displaycount'); // Default limit is 10

        // Validasi limit
        if (!is_numeric($limit) || $limit <= 0) 
        {
            $limit = 5; // Set default limit if invalid
        }

        // Mengambil data dengan limit
        $items = Item::paginate($limit);
        $columns = Schema::getColumnListing('items');

        // Mengirim data ke view
        return view('listOfItems', compact('items', 'columns', 'limit'));
    }

    public function index_master_data()
    {
        // Mengambil data dengan limit
        $items = Item::all();
        $columns = Schema::getColumnListing('items');

        // Mengirim data ke view
        return view('master_data', compact('items', 'columns'));
    }

    public function insertItems(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name_Item' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'available' => 'required|string',
            'id_Category' => 'required|integer|exists:categories,id_Category',
            'link' => 'nullable|url',
        ]);
        // Simpan data ke model
        $item = new Item();
        $item->name_Item = $request->name_Item;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->available = $request->available;
        $item->id_Category = $request->id_Category;
        $item->link = $request->link;
        $item->save();
        // Redireksi atau kirim pesan sukses
        return redirect()->back()->with('success', 'Item berhasil disimpan!');
    }

    // Removed showItems method as index now handles limit

}
