<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property')->delete();
        
        \DB::table('property')->insert(array (
            0 => 
            array (
                'id' => 3,
                'judul' => 'tanah kapling 1',
                'deskripsi' => 'lokasi strategis',
                'slug' => 'tanah-kapling-1',
                'harga' => '10000000.00',
                'panjang' => '10.00',
                'lebar' => '10.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.316469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:23:55',
                'updated_at' => '2017-07-11 03:23:55',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            1 => 
            array (
                'id' => 4,
                'judul' => 'tanah kapling 2',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-2',
                'harga' => '20000000.00',
                'panjang' => '20.00',
                'lebar' => '20.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.314469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            2 => 
            array (
                'id' => 5,
                'judul' => 'tanah kapling 3',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-3',
                'harga' => '30000000.00',
                'panjang' => '30.00',
                'lebar' => '30.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.313469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            3 => 
            array (
                'id' => 6,
                'judul' => 'tanah kapling 4',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-4',
                'harga' => '40000000.00',
                'panjang' => '40.00',
                'lebar' => '40.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.312469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            4 => 
            array (
                'id' => 7,
                'judul' => 'tanah kapling 5',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-5',
                'harga' => '50000000.00',
                'panjang' => '50.00',
                'lebar' => '50.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.310563',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            5 => 
            array (
                'id' => 8,
                'judul' => 'tanah kapling 6',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-6',
                'harga' => '60000000.00',
                'panjang' => '60.00',
                'lebar' => '60.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.010469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            6 => 
            array (
                'id' => 9,
                'judul' => 'tanah kapling 7',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-7',
                'harga' => '70000000.00',
                'panjang' => '70.00',
                'lebar' => '70.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.110469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            7 => 
            array (
                'id' => 10,
                'judul' => 'tanah kapling 8',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-8',
                'harga' => '80000000.00',
                'panjang' => '80.00',
                'lebar' => '80.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.210468',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            8 => 
            array (
                'id' => 11,
                'judul' => 'tanah kapling 10',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-9',
                'harga' => '100000000.00',
                'panjang' => '100.00',
                'lebar' => '100.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.315469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            9 => 
            array (
                'id' => 12,
                'judul' => 'tanah kapling 9',
                'deskripsi' => 'area kedamean',
                'slug' => 'tanah-kapling-10',
                'harga' => '90000000.00',
                'panjang' => '90.00',
                'lebar' => '90.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '-7.310469',
                'longitude' => '112.566829',
                'created_at' => '2017-07-11 03:24:42',
                'updated_at' => '2017-07-11 03:24:42',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
            10 => 
            array (
                'id' => 21,
                'judul' => 'property ke 11',
                'deskripsi' => 'luas sekali tanahnya',
                'slug' => 'property-ke-11',
                'harga' => '15800000000.00',
                'panjang' => '120.00',
                'lebar' => '120.00',
                'isactive' => 1,
                'status' => 0,
                'latitude' => '6.22222',
                'longitude' => '5.366533',
                'created_at' => '2017-07-13 04:34:18',
                'updated_at' => '2017-07-13 04:34:18',
                'user_id' => 1,
                'jenis_id' => 1,
                'type_id' => 1,
                'kelurahan_id' => '3525022005',
            ),
        ));
        
        
    }
}