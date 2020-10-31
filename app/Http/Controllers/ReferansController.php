<?php

namespace App\Http\Controllers;

use App\Models\ReferansKategori;
use App\Models\Referanslar;
use Illuminate\Http\Request;

class ReferansController extends Controller
{
    public function index() {
        $referanslar = Referanslar::all();
        $refKategori = ReferansKategori::all();
        return view('referanslar.index', compact('referanslar', 'refKategori'));
    }
}
