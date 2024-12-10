<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form')->insert([
            'idForm' => '000001',
            'Nama' => 'Lindsy',
            'Email' => 'lindsy@gmail.com',
        ]);
    }
}
