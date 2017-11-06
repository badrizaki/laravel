<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('currency')->insert([
            [
                'currencyCode' => 'USD',
                'currencyName' => 'Dollar',
                'sell' => '13498',
                'buy' => '13486',
            ],
            [
                'currencyCode' => 'SGD',
                'currencyName' => 'Singapore Dollar',
                'sell' => '9970',
                'buy' => '9950',
            ],
            [
                'currencyCode' => 'EUR',
                'currencyName' => 'Euro',
                'sell' => '16012',
                'buy' => '15912',
            ],
            [
                'currencyCode' => 'AUD',
                'currencyName' => 'Australian Dollar',
                'sell' => '10616',
                'buy' => '10536',
            ],
        ]);
    }
}