<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('fuels')->insert([
            ['type' => 'gasoline'],
            ['type' => 'diesel'],
            ['type' => 'electric'],
            ['type' => 'hybrid'],
        ]);
    }
}
