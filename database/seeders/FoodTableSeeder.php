<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            ['idFood' => '001', 'NamaMakanan' => 'BeefTeriyaki', 'Price' => 40000],
            ['idFood' => '002', 'NamaMakanan' => 'ChickenTeriyaki', 'Price' => 40000],
            ['idFood' => '003', 'NamaMakanan' => 'Ramen', 'Price' => 35000],
            ['idFood' => '004', 'NamaMakanan' => 'ChickenKatsu', 'Price' => 37000],
            ['idFood' => '005', 'NamaMakanan' => 'Takoyaki', 'Price' => 25000],
            ['idFood' => '006', 'NamaMakanan' => 'Yakimeshi', 'Price' => 35000],
        ]);
    }
}
