<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CavityTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(PackagingTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
    }
}
