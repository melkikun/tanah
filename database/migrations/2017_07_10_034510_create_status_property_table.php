<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('status_property', function(Blueprint $table){
            $table->increments('id');
            $table->date('tgl_jual');
            $table->decimal('harga', 38, 2);
            $table->integer('isactive')->default(1);
            $table->timestamps();
            //foreignkey
            $table->integer('user_id')->unsigned();
            $table->integer('property_id')->unsigned();
            //link foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('property')->onDelete('cascade');
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
        Schema::dropIfExists('status_property');
    }
}
