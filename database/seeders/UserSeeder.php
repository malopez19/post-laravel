<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //user seeder
        $user = new User();
        $user->name = 'TestUser1';
        $user->email = 'testuser1@gmail';
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = 'TestUser2';
        $user->email = 'testuser2@gmail';
        $user->password = bcrypt('1234567');
        $user->save();

        User::factory(10)->create();
    }
}
