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
                'role_id' => 2,
                'name' => 'Patrick',
                'email' => 'pasheil@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m4Vb1V6nRYgoYOl3JE.4d.sYW3Y3pzMo4tRhfdDM6QK.5TE6FJlg2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-01 01:45:54',
                'updated_at' => '2020-05-01 01:45:54',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Guido',
                'email' => 'guidoaimar@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$45oZ197cC9ylHNlaHK0T8OI6bZmQ6kOFarDYT0RE0kvGuADDyssk6',
                'remember_token' => '7u1X6aS2IWkueVl1UtuJxZNLkceXUbV1JyYUE35Au5NPgChFznG72SjtycIe',
                'settings' => NULL,
                'created_at' => '2020-05-01 18:18:34',
                'updated_at' => '2020-05-05 22:27:49',
            ),
        ));


    }
}
