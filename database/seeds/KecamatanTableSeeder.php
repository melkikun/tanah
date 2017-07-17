<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kecamatan')->delete();
        
        \DB::table('kecamatan')->insert(array (
            0 => 
            array (
                'id' => 352501,
                'nama' => 'Dukun',
                'kabupaten_id' => 3525,
            ),
            1 => 
            array (
                'id' => 352502,
                'nama' => 'Balongpanggang',
                'kabupaten_id' => 3525,
            ),
            2 => 
            array (
                'id' => 352503,
                'nama' => 'Panceng',
                'kabupaten_id' => 3525,
            ),
            3 => 
            array (
                'id' => 352504,
                'nama' => 'Benjeng',
                'kabupaten_id' => 3525,
            ),
            4 => 
            array (
                'id' => 352505,
                'nama' => 'Duduksampeyan',
                'kabupaten_id' => 3525,
            ),
            5 => 
            array (
                'id' => 352506,
                'nama' => 'Wringinanom',
                'kabupaten_id' => 3525,
            ),
            6 => 
            array (
                'id' => 352507,
                'nama' => 'Ujungpangkah',
                'kabupaten_id' => 3525,
            ),
            7 => 
            array (
                'id' => 352508,
                'nama' => 'Kedamean',
                'kabupaten_id' => 3525,
            ),
            8 => 
            array (
                'id' => 352509,
                'nama' => 'Sidayu',
                'kabupaten_id' => 3525,
            ),
            9 => 
            array (
                'id' => 352510,
                'nama' => 'Manyar',
                'kabupaten_id' => 3525,
            ),
            10 => 
            array (
                'id' => 352511,
                'nama' => 'Cerme',
                'kabupaten_id' => 3525,
            ),
            11 => 
            array (
                'id' => 352512,
                'nama' => 'Bungah',
                'kabupaten_id' => 3525,
            ),
            12 => 
            array (
                'id' => 352513,
                'nama' => 'Menganti',
                'kabupaten_id' => 3525,
            ),
            13 => 
            array (
                'id' => 352514,
                'nama' => 'Kebomas',
                'kabupaten_id' => 3525,
            ),
            14 => 
            array (
                'id' => 352515,
                'nama' => 'Driyorejo',
                'kabupaten_id' => 3525,
            ),
            15 => 
            array (
                'id' => 352516,
                'nama' => 'Gresik',
                'kabupaten_id' => 3525,
            ),
            16 => 
            array (
                'id' => 352517,
                'nama' => 'Sangkapura',
                'kabupaten_id' => 3525,
            ),
            17 => 
            array (
                'id' => 352518,
                'nama' => 'Tambak',
                'kabupaten_id' => 3525,
            ),
        ));
        
        
    }
}