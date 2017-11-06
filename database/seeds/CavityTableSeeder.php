<?php

use Illuminate\Database\Seeder;

class CavityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cavity')->insert([
            [
                'cavity' => '1',
                'neckDiameter' => '107',
                'bodyDiameter' => '150',
                'height' => '335',
                'volume' => '5000',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '2',
                'neckDiameter' => '80',
                'bodyDiameter' => '130',
                'height' => '335',
                'volume' => '3000',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '3',
                'neckDiameter' => '72',
                'bodyDiameter' => '130',
                'height' => '335',
                'volume' => '3000',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '4',
                'neckDiameter' => '60',
                'bodyDiameter' => '100',
                'height' => '335',
                'volume' => '2000',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '5',
                'neckDiameter' => '42',
                'bodyDiameter' => '66',
                'height' => '265',
                'volume' => '900',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '6',
                'neckDiameter' => '35',
                'bodyDiameter' => '55',
                'height' => '250',
                'volume' => '600',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '7',
                'neckDiameter' => '30',
                'bodyDiameter' => '48',
                'height' => '250',
                'volume' => '350',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '8',
                'neckDiameter' => '24',
                'bodyDiameter' => '36',
                'height' => '210',
                'volume' => '250',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'cavity' => '10',
                'neckDiameter' => '18',
                'bodyDiameter' => '36',
                'height' => '120',
                'volume' => '120',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
