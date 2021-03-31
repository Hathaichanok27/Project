<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'user_fullname'=>'Superadmin',
                'username'=>'superadmin001',
                'user_email'=>'superadmin@superadmin.com',
                'is_superadmin'=>'1',
                'password'=> bcrypt('123456'), 
            ],
            [
                'user_fullname'=>'Admin',
                'username'=>'admin001',
                'user_email'=>'admin@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'user_fullname'=>'User',
                'username'=>'user001',
                'user_email'=>'user@user.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'user_fullname'=>'User2',
                'username'=>'user002',
                'user_email'=>'user2@user.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'user_fullname'=>'User3',
                'username'=>'user003',
                'user_email'=>'user3@user.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'user_fullname'=>'60160039',
                'username'=>'60160039',
                'user_email'=>'60160039@go.buu.ac.th',
                'password'=> bcrypt('Mark_imt1998'),
            ],
            [
                'user_fullname'=>'60160008',
                'username'=>'60160008',
                'user_email'=>'60160008@go.buu.ac.th',
                'password'=> bcrypt('HAthaimild27.'),
            ],
            [
                'user_fullname'=>'60160009',
                'username'=>'60160009',
                'user_email'=>'60160009@go.buu.ac.th',
                'password'=> bcrypt('9988_7766.'),
            ],
            [
                'user_fullname'=>'60160010',
                'username'=>'60160010',
                'user_email'=>'60160010@go.buu.ac.th',
                'password'=> bcrypt('Mark'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
