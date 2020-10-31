<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferansKategori extends Model
{
    protected $table = "referans_kategori";
    protected $guarded = [];


    public function referans_kategori()
    {
        return $this->belongsTo('App\Models\Referanslar', 'kid');
    }

}
