<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type')->delete();
        
        \DB::table('type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'jual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'sewa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}