<?php

use Illuminate\Database\Seeder;

class PropertyImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_image')->delete();
        
        \DB::table('property_image')->insert(array (
            0 => 
            array (
                'id' => 3,
                'img_path' => '1.jpg',
                'property_id' => 3,
                'created_at' => '2017-07-11 03:23:56',
                'updated_at' => '2017-07-11 03:23:56',
            ),
            1 => 
            array (
                'id' => 4,
                'img_path' => '2.jpg',
                'property_id' => 4,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            2 => 
            array (
                'id' => 5,
                'img_path' => '3.jpg',
                'property_id' => 5,
                'created_at' => '2017-06-11 03:24:42',
                'updated_at' => '2016-07-11 03:24:42',
            ),
            3 => 
            array (
                'id' => 6,
                'img_path' => '4.jpg',
                'property_id' => 6,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            4 => 
            array (
                'id' => 7,
                'img_path' => '5.jpg',
                'property_id' => 7,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            5 => 
            array (
                'id' => 8,
                'img_path' => '6.jpg',
                'property_id' => 8,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            6 => 
            array (
                'id' => 9,
                'img_path' => '7.jpg',
                'property_id' => 9,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            7 => 
            array (
                'id' => 10,
                'img_path' => '8.jpg',
                'property_id' => 10,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            8 => 
            array (
                'id' => 11,
                'img_path' => '9.jpg',
                'property_id' => 11,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            9 => 
            array (
                'id' => 12,
                'img_path' => '10.jpg',
                'property_id' => 12,
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
            ),
            10 => 
            array (
                'id' => 13,
                'img_path' => '5966f84a8c12e.jpg',
                'property_id' => 21,
                'created_at' => '2017-07-13 04:34:18',
                'updated_at' => '2017-07-13 04:34:18',
            ),
        ));
        
        
    }
}