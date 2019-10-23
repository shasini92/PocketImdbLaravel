<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('testtest'),
        ]);

        factory(User::class, 10)->create();
    }
}
