<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ignacio',
            'email' => 'i.panach@uv.es',
            'password' => bcrypt('password'),
        ]);
    }
}
