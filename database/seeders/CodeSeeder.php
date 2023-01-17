<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 2; $i++) { 
            DB::table('codes')->insert([
                'name' => 10+$i,
                'activated' => 0+$i,
                'user_id' => 1,
                'offers_id' => 1+$i,
            ]);
        }
    }
}
