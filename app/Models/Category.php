<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_Category',
        'name_category',
        'type',
        'description',
    ];
    protected $table = 'categories'; // pastikan sesuai dengan nama tabel di database
    protected $primaryKey = 'id_Category'; // pastikan sesuai dengan primary key tabel
    public $timestamps = true;
}
