<?php

namespace App\Http\Controllers;

use App\Models\Sayfa;
use Illuminate\Http\Request;

class SayfaController extends Controller
{
    public function detail($id) {
        $item = Sayfa::whereId($id)->firstOrFail();
        return view('sayfa.detail', compact('item'));
    }
}
