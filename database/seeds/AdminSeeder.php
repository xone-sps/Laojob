<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use App\User;
// use App\UserType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $user = new User([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);
        $user->save();
        // $userType = new UserType(['type_user_id' => 1]);
        // $user->userType()->save($userType);
    }
}
