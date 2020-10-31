<?php

use App\Models\HaberKategori;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (! function_exists('get_kategori')) {
    function get_kategori() {
        return \App\Models\HaberKategori::with('alt_kategoriler')->whereRaw('ust_id is null')->where('aktif', 1)->orderByDesc('id')->get();
    }
}


if (! function_exists('kayan_haber')) {
    function kayan_haber() {
        return \App\Models\Haberler::where('aktif', 1)->where('kayan_yazi', 1)->get();
    }
}

/*if (! function_exists('ayarlar')) {
    function ayarlar() {
        return Ayarlar::whereRaw('id', 1)->get();
    }
}*/
