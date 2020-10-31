<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSayfaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayfa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('baslik')->nullable();
            $table->string('ozet')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('resim')->nullable();
            $table->integer('aktif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sayfa');
    }
}
