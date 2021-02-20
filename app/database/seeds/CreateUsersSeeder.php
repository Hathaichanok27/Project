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
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
