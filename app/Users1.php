<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_User',
        'email',
        'name',
        'password',
        'alamat',
        'kota',
        'foto',
    ];

    protected $table = 'users1';
    protected $primaryKey = 'id_User';
    public $timestamps = false;
}
