<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id' => 1,
            'name' =>'ベンチプレス',
            'user_id' =>1
            ]);
        DB::table('menus')->insert([
            'id' => 2,
            'name' =>'ダンベルフライ',
            'user_id' =>1
            ]);
        DB::table('menus')->insert([
            'id' => 3,
            'name' =>'ダンベルカール',
            'user_id' =>1
            ]);
        DB::table('menus')->insert([
            'id' => 4,
            'name' =>'プリチャーカール',
            'user_id' =>1
            ]);
        DB::table('menus')->insert([
            'id' => 5,
            'name' =>'シットアップベンチ',
            'user_id' =>1
            ]);
        DB::table('menus')->insert([
            'id' => 6,
            'name' =>'懸垂',
            'user_id' =>1
            ]);
    }
}
