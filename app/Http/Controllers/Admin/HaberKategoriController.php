<?php

namespace App\Http\Controllers\Admin;

use App\Models\HaberKategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberKategoriController extends Controller
{
    public function index(){
        $kategoriler = HaberKategori::with('ust_kategori')->orderBy('id')->get();
        $anakategoriler = HaberKategori::whereRaw('ust_id is null')->get();
        return view('admin.haber_kategori.index', compact('anakategoriler', 'kategoriler'));
    }

    public function form($id = 0) {
        $item = new HaberKategori;
        if ($id > 0) {
            $item = HaberKategori::find($id);
        }
        $haberler = HaberKategori::all();
        return view('admin.haber_kategori.form', compact('haberler', 'item'));
    }

    public function kaydet($id = 0) {
        $data = request()->only('baslik', 'ust_id');

        if ($id > 0) {
            $item = HaberKategori::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        else {
            $item = HaberKategori::create($data);
        }

        return redirect()->route('admin.haber_kategori.index');
    }

    public function aktif($id) {
        $data = ['aktif' => 1];
        if ($id > 0) {
            $item = HaberKategori::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haber_kategori.index');
    }

    public function pasif($id) {
        $data = ['aktif' => 0];
        if ($id > 0) {
            $item = HaberKategori::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haber_kategori.index');
    }

    public function sil($id) {
        HaberKategori::destroy($id);
        return redirect()->route('admin.haber_kategori.index');
    }

}
