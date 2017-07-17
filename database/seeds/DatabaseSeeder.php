<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(UsersTableSeeder::class);
        $this->call(JenisTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(ProvinsiTableSeeder::class);
        $this->call(KabupatenTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(KelurahanTableSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(PropertyImageTableSeeder::class);
        $this->call(StatusPropertyTableSeeder::class);
    }
}
