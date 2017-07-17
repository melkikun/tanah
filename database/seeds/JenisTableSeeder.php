<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jenis')->delete();
        
        \DB::table('jenis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'tanah',
                'created_at' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'rumah',
                'created_at' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'apartemen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}