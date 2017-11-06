<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('material')->insert([
            [
                'materialName' => 'PET Resin',
                'price' => '1050.00',
                'unitPrice' => 'US$/ton',
                'dosage' => null,
                'unitDosage' => null,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'materialName' => 'Pigment',
                'price' => '9.00',
                'unitPrice' => 'USD/kg',
                'dosage' => '1.80',
                'unitDosage' => '%',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
