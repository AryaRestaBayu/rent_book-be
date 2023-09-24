<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Resources\BukuResource;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return BukuResource::collection($buku);
    }
}
