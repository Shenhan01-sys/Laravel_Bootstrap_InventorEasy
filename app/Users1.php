<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'No_Telp',
        'email',
    ];

    protected $table = 'users1';
    protected $primaryKey = 'nim';
    public $timestamps = false;
}
