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
            $limit = 10; // Set default limit if invalid
        }

        // Mengambil data dengan limit
        $items = Item::paginate($limit);
        $columns = Schema::getColumnListing('items');

        // Mengirim data ke view
        return view('listOfItems', compact('items', 'columns', 'limit'));
    }

    // Removed showItems method as index now handles limit

}
