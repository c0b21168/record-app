<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class MaxRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('max_records')->insert([
            'menu_id'=>2,
            'training_date'=>'2023-06-17',
            'max_weight'=>2.6,
            ]);
        DB::table('max_records')->insert([
            'menu_id'=>2,
            'training_date'=>'2023-06-18',
            'max_weight'=>3.0,
            ]);
        DB::table('max_records')->insert([
            'menu_id'=>2,
            'training_date'=>'2023-06-19',
            'max_weight'=>4.6,
            ]);
        DB::table('max_records')->insert([
            'menu_id'=>2,
            'training_date'=>'2023-06-20',
            'max_weight'=>5.6,
            ]);
        DB::table('max_records')->insert([
            'menu_id'=>2,
            'training_date'=>'2023-06-21',
            'max_weight'=>6.6,
            ]);
    }
}
