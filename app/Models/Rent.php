<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Customer;


class Rent extends Model
{
    use HasFactory;

    protected $table = 'rent';

    protected $fillable = [
        'Customer_id',
        'Book_id',
        'Date_Rent',
        'Date_Return',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_id', 'Id');
    }

    public function book()
    {
        return $this->belongsTo(Buku::class, 'Book_id', 'Id');
    }
}
