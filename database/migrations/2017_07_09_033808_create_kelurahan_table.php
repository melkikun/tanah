<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('kelurahan', function(Blueprint $table){
           $table->char('id', 50);
           $table->string('nama');
           $table->integer('isactive')->default(1);
            // foreign key
           $table->integer('kecamatan_id')->unsigned();
            // relation foreign key
           $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
           $table->primary('id');
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
       Schema::dropIfExists('kelurahan');
   }
}
