<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'roleCode' => 'SUP',
        ]);
    }
}