<?php

namespace App\Http\Controllers\Admin;

use App\Models\ReferansKategori;
use App\Models\Referanslar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferanslarController extends Controller
{
    public function index() {
        $referanslar = Referanslar::all();
        return view('admin.referanslar.index', compact('referanslar'));
    }

    public function form($id = 0) {
        $item = new Referanslar;
        if ($id > 0) {
            $item = Referanslar::find($id);
        }
        $referanslar = Referanslar::all();
        $referanskat = ReferansKategori::all();
        return view('admin.referanslar.form', compact('referanslar', 'item', 'referanskat'));
    }

    public function kaydet($id = 0) {
        $data = request()->only('baslik', 'link', 'kid');

        if ($id > 0) {
            $item = Referanslar::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        else {
            $item = Referanslar::create($data);
        }

        return redirect()->route('admin.referanslar.index');
    }

    public function aktif($id) {
        $data = ['aktif' => 1];
        if ($id > 0) {
            $item = Referanslar::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.referanslar.index');
    }

    public function pasif($id) {
        $data = ['aktif' => 0];
        if ($id > 0) {
            $item = Referanslar::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.referanslar.index');
    }

    public function sil($id) {
        Referanslar::destroy($id);
        return redirect()->route('admin.referanslar.index');
    }

}
