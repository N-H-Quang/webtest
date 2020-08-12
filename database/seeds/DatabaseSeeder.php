<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'quang',
            'email' => 'ducy357@gmail.com',
            'password' => Hash::make('Quang1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
