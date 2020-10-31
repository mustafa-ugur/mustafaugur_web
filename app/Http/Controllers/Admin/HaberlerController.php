<?php

namespace App\Http\Controllers\Admin;

use App\Models\HaberKategori;
use App\Models\Haberler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberlerController extends Controller
{
    public function index() {
        $haberler = Haberler::all();
        return view('admin.haberler.index', compact('haberler'));
    }

    public function form($id = 0) {
        $item = new Haberler;
        if ($id > 0) {
            $item = Haberler::find($id);
        }
        $haberler = Haberler::all();
        $kategoriler = HaberKategori::all();
        return view('admin.haberler.form', compact('haberler', 'item', 'kategoriler'));
    }

    public function kaydet($id = 0) {
        $data = request()->only('baslik', 'adres', 'ozet', 'embed', 'videoResim', 'aciklama', 'kid');

        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        else {
            $item = Haberler::create($data);
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
                $resim->move('upload/haberler', $dosya_adi);

                Haberler::updateOrCreate(
                    ['id' => $item->id],
                    ['resim' => $dosya_adi]

                );
            }

            //$resim = request()->resim;
            //$resim->extension(); uzantı çeker
            //$resim->getClientOriginalName(); dosyanın orjinal adı
            //$resim->hashName(); rast gele isim verme
        }
        return redirect()->route('admin.haberler.index');
    }

    public function aktif($id) {
        $data = ['aktif' => 1];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }

    public function pasif($id) {
        $data = ['aktif' => 0];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }


    public function slayt_aktif($id) {
        $data = ['slayt' => 1];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }

    public function slayt_pasif($id) {
        $data = ['slayt' => 0];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }


    public function kayan_aktif($id) {
        $data = ['kayan_yazi' => 1];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }

    public function kayan_pasif($id) {
        $data = ['kayan_yazi' => 0];
        if ($id > 0) {
            $item = Haberler::where('id', $id)->firstOrFail();
            $item->update($data);
        }
        return redirect()->route('admin.haberler.index');
    }

    public function sil($id) {
        Haberler::destroy($id);
        return redirect()->route('admin.haberler.index');
    }

}
