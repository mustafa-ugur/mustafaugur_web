<?php

namespace App\Http\Controllers;

use App\Models\HaberKategori;
use App\Models\Haberler;
use Illuminate\Http\Request;

class HaberlerController extends Controller
{
    public function detail($id = 0) {

        $kategoriler = HaberKategori::with('ust_kategori')->where('aktif', 1)->orderByDesc('id')->paginate(8);
        $haberler = Haberler::all();
        $item = Haberler::whereId($id)->firstOrFail();
        $item_kategori = HaberKategori::where('id', $item->kid)->firstOrFail();
        if ($item_kategori->ust_id != null) {
            $item_ust_kategori = HaberKategori::where('id', $item_kategori->ust_id)->firstOrFail();
            return view('haber.detail', compact('haberler','item', 'item_ust_kategori', 'item_kategori', 'kategoriler'));
        }
        else {
            return view('haber.detail', compact('haberler', 'item', 'kategoriler'));
        }
    }

    public function kategori($id) {
        $kategoriler = HaberKategori::with('ust_kategori')->where('id', $id)->firstOrFail();
        $item = HaberKategori::where('id', $id)->firstOrFail();
        $alt_kategoriler = HaberKategori::where('ust_id', $item->id)->get();
        $haberler = Haberler::where('kid', $item->id)->where('aktif', 1)->get();
        return view('haberKategori.kategori', compact('haberler', 'item', 'kategoriler', 'alt_kategoriler'));
    }
}
