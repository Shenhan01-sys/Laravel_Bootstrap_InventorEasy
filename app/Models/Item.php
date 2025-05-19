<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_Item',
        'name_Item',
        'id_Category',
        'description',
        'quantity',
        'available',
        'link',
    ];
    
    protected $table = 'items'; // pastikan sesuai dengan nama tabel di database
    protected $primaryKey = 'id_Item'; // pastikan sesuai dengan primary key tabel
    public $timestamps = true;
}