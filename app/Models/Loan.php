<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

        protected $fillable = [
        'id_Item',
        'id_User',
        'loan_date',
        'return_date',
        'status',
        'notes',
        'quantity',
    ];
    
    protected $table = 'loans';
    protected $primaryKey = 'id_Loan';
    public $timestamps = true;

}
