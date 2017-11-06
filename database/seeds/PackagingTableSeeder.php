<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PackagingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('packaging')->insert([
            [
                'packagingName' => 'Carton Box',
                'price' => '2.63',
                'unitPrice' => 'Rp/ CBO',
            ],
            [
                'packagingName' => 'Plastik',
                'price' => '0.60',
                'unitPrice' => 'Rp/ sheet',
            ],
            [
                'packagingName' => '#plastik sht/pack',
                'price' => null,
                'unitPrice' => 'sheet/pack',
            ],
            [
                'packagingName' => 'Btls /pack',
                'price' => null,
                'unitPrice' => 'btls/ pack',
            ],
        ]);
    }
}
