<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Referanslar extends Model
{
    use SoftDeletes;
    protected $table = "referanslar";
    protected $guarded = [];
    const DELETED_AT = 'silinme_tarihi';


/*    public function referans_kategori()
    {
        return $this->belongsToMany('App\Models\ReferansKategori', 'id');
    }*/


    public function referans_kategori()
    {
        return $this->hasOne('App\Models\ReferansKategori', 'id')->withDefault();
    }

}
