<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Buku;
use App\Http\Resources\RentResource;

class RentController extends Controller
{
    public function index()
    {
        $rents = Rent::all();
        return RentResource::collection($rents);
    }
}
