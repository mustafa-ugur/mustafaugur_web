<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yorumlar extends Model
{
    use SoftDeletes;
    protected $table = "haber_yorumlari";
    protected $guarded = [];
    const DELETED_AT = 'silinme_tarihi';

    public function yorumlar()
    {
        return $this->belongsTo('App\Models\Haberler', 'id');
    }

    public function kullanici()
    {
        return $this->belongsTo('App\Models\Kullanici', 'id');
    }

}
