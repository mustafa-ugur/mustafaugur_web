<?php

namespace App\Http\Controllers;

use App\Models\HaberKategori;
use App\Models\Haberler;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $kategoriler = HaberKategori::with('alt_kategoriler')->where('aktif', 1)->orderByDesc('id')->paginate(8);
        $haberler = Haberler::where('aktif', 1)->paginate('4');
        $tum_kat = HaberKategori::where('aktif', 1)->get();
        $haberler_slayt = Haberler::where('slayt', 1)->get();
        return view('index', compact('haberler', 'kategoriler', 'haberler_slayt', 'tum_kat'));
    }
}
