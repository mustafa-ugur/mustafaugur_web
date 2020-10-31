<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferanslarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referanslar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kid')->nullable();
            $table->string('baslik')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('referanslar');
    }
}
