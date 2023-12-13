<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('operation_modes')->insert([
                 ['mode_type' => 'automatic'],
                 ['mode_type' => 'manual'],
                 ['mode_type' => 'semi-automatic'],
             ]);

    }
}
