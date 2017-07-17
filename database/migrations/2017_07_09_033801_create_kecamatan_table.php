<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('kecamatan', function(Blueprint $table){
         $table->increments('id');
            $table->string('nama');
            // foreign key
            $table->integer('kabupaten_id')->unsigned();
            // relation foreign key
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('kecamatan');
    }
}
