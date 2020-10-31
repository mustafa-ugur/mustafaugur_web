<?php

namespace App\Http\Controllers\Admin;

use App\Models\Haberler;
use App\Models\Yorumlar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YorumlarController extends Controller
{
    public function index() {
        $haberler = Haberler::all();
        $yorumlar = Yorumlar::orderByDesc('created_at')->paginate(1000);
        return view('admin.yorumlar.index', compact('haberler', 'yorumlar'));
    }

    public function aktif($id){
        $data = ['aktif' => 1];
        if ($id > 0) {
            $item = Yorumlar::where('id',$id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.yorumlar.index');
    }

    public function pasif($id){
        $data = ['aktif' => 0];
        if ($id > 0) {
            $item = Yorumlar::where('id',$id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.yorumlar.index');
    }

    public function sil($id) {
        Yorumlar::destroy($id);

        return redirect()->route('admin.yorumlar.index');
    }

}
