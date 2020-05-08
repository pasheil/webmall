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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-05-01 01:45:54',
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 01:45:54',
                'updated_at' => '2020-05-01 01:45:54',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 18:18:34',
                'updated_at' => '2020-05-05 22:27:49',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Customer 2',
                'email' => 'customer2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 18:18:34',
                'updated_at' => '2020-05-05 22:27:49',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 18:18:34',
                'updated_at' => '2020-05-05 22:27:49',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 18:18:34',
                'updated_at' => '2020-05-05 22:27:49',
            ),
        ));
        
        
    }
}