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
               'name'=>'Superadmin',
               'username'=>'superadmin001',
                'email'=>'superadmin@superadmin.com',
                 'is_superadmin'=>'1',
                'password'=> bcrypt('123456'), 
            ],
            [
               'name'=>'Admin',
               'username'=>'admin001',
               'email'=>'admin@admin.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'username'=>'user001',
               'email'=>'user@user.com',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
