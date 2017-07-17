<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('property', function(Blueprint $table){
            $table->increments('id');
            $table->string('judul')->notnulll();
            $table->longText('deskripsi');
            $table->string('slug');
            $table->decimal('harga', 38, 2)->notnulll();
            $table->decimal('panjang', 38, 2)->notnulll();
            $table->decimal('lebar', 38, 2)->notnulll();
            $table->integer('isactive')->default(1);
            $table->integer('status')->default(0);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();

            //foreignkey
            $table->integer('user_id')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->integer('type_id')->unsigned();
            // $table->integer('provinsi_id')->unsigned();
            // $table->integer('kabupaten_id')->unsigned();
            // $table->integer('kecamatan_id')->unsigned();
            $table->char('kelurahan_id', 50);

            //relation foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
            
            // $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            // $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade');
            // $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onDelete('cascade');

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
        Schema::dropIfExists('property');
    }
}
