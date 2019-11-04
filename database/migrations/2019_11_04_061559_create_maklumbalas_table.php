<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaklumbalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumbalas', function (Blueprint $table) {
            $table->bigIncrements('maklumbalas_id');
            $table->bigInteger('menu_id');
            $table->bigInteger('ndp');
            $table->text('aduan');
            $table->string('pic_url', 250);
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
        Schema::dropIfExists('maklumbalas');
    }
}
