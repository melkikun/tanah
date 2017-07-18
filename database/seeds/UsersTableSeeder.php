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
                'username' => 'miko',
                'email' => 'mikohendroc@gmail.com',
                'password' => '$2y$10$L1FvWi9NdAvyy/96gb3/dOxas/RQm5uBYvWiecAwPGlK6xyA5Yt1m',
                'remember_token' => 'lkWfTkdIsAkTleI4DGlZUWhyFlUvGkct3qlKefjbNTiZzGCuhyjnMDeVb9XP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ahmad',
                'username' => 'ahmad',
                'email' => 'ahmad@weltes.co.id',
                'password' => '$2y$10$k3sqJ6Is4S6PoThbUqNkp.TvWjy7BUfYLyaLLJsnCbQE.PFIS.NQu',
                'remember_token' => 'MeghLGqrqu9f688QX2tvbU0PNMRl9w73JQnr6oMAbtgX5ZKhyDlc8JOgYCBf',
                'created_at' => '2017-07-17 07:21:02',
                'updated_at' => '2017-07-17 07:21:02',
            ),
        ));
        
        
    }
}