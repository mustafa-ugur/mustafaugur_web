<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sayfa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SayfaController extends Controller
{
    public function index() {
        $sayfa = Sayfa::all();
        return view('admin.sayfa.index', compact('sayfa'));
    }

    public function form($id = 0) {
        $item = new Sayfa;
        if ($id > 0) {
            $item = Sayfa::find($id);
        }
        //$item = Sayfa::all();
        return view('admin.sayfa.form', compact('item'));
    }


    public function kaydet($id = 0) {
        $data = request()->only('baslik', 'ozet', 'aciklama');

        if ($id > 0) {
            $item = Sayfa::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        else {
            $item = Sayfa::create($data);
        }

        if (request()->hasFile('resim'))
        {
            $this->validate(request(), [
                'resim' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $resim = request()->file('resim');

            $dosya_adi = $item->id . "-" . time() . "." . $resim->extension();

            if ($resim->isValid())
            {
                $resim->move('upload/sayfa', $dosya_adi);

                Sayfa::updateOrCreate(
                    ['id' => $item->id],
                    ['resim' => $dosya_adi]

                );
            }

        }
        return redirect()->route('admin.sayfa.index');
    }

    public function aktif($id) {
        $data = ['aktif' => 1];
        if ($id > 0) {
            $item = Sayfa::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.sayfa.index');
    }

    public function pasif($id) {
        $data = ['aktif' => 0];
        if ($id > 0) {
            $item = Sayfa::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.sayfa.index');
    }

    public function sil($id) {
        Sayfa::destroy($id);
        return redirect()->route('admin.sayfa.index');
    }

}
