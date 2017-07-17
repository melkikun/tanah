<?php

use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kabupaten')->delete();
        
        \DB::table('kabupaten')->insert(array (
            0 => 
            array (
                'id' => 3525,
                'nama' => 'KAB. GRESIK',
                'provinsi_id' => 35,
            ),
        ));
        
        
    }
}