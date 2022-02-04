<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Adinata";
        $user->password = bcrypt('adinata');
        $user->email = "adinata@gmail.com";
        $user->save();

        $user = new User();
        $user->name = "user";
        $user->password = bcrypt('user');
        $user->email = "user@gmail.com";
        $user->save();
    }
}
