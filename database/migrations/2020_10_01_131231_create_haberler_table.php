<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaberlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haberler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('baslik')->nullable();
            $table->string('adres')->nullable();
            $table->string('embed')->nullable();
            $table->string('videoResim')->nullable();
            $table->string('etiket')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('tarih')->nullable();
            $table->string('ozet')->nullable();
            $table->string('resim')->nullable();
            $table->string('aktif')->nullable();
            $table->timestamps();
            //$table->timestamps('silinme_tarihi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('haberler');
    }
}
