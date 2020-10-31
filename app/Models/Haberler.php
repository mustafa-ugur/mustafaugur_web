<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Haberler extends Model
{
    use SoftDeletes;
    protected $table = "haberler";
    protected $guarded = [];
    const DELETED_AT = 'silinme_tarihi';


    public function haber_kategori()
    {
        return $this->belongsToMany('App\Models\HaberKategori', 'id');
    }

    public function yorumlar()
    {
        return $this->hasOne('App\Models\Yorumlar', 'haber_id')->withDefault();
    }
}
