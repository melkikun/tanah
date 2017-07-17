<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'miko',
                'username'=>'miko',
                'email' => 'mikohendroc@gmail.com',
                'password' => '$2y$10$L1FvWi9NdAvyy/96gb3/dOxas/RQm5uBYvWiecAwPGlK6xyA5Yt1m',
                'remember_token' => '3XvNOnCvZjheFAzUcOEldobJKPZtBPLS0OYF6CzHPl8W4lR0lR4Fg2IJrfnq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}