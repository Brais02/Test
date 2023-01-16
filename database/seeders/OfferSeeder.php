<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [
            "LAN",
            "MAN",
            "WAN"
        ];

        foreach ($array as $valor) {
            DB::table('offers')->insert([
                'name' => "Crear red ".$valor,
            ]);
        }
    }
}
