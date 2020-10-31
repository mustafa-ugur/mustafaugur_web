<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HaberKategori extends Model
{
    use SoftDeletes;
    protected $table = "haber_kategori";
    protected $guarded = [];
    const DELETED_AT = 'silinme_tarihi';

    public function haber_kat()
    {
        return $this->belongsToMany('App\Models\Haberler', 'kid');
    }

    public function alt_kategoriler()
    {
        return $this->hasMany('App\Models\HaberKategori', 'ust_id', 'id');
    }

    public function ust_kategori() {
        return $this->belongsTo('App\Models\HaberKategori', 'ust_id')->withDefault();
    }



}
