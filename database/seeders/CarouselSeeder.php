<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'link' => "/music/7",
            'description' => "Ariana is back with her new album Positions",
            'image' => "static/positionsbannernew.jpg",
        ]);
        DB::table('carousels')->insert([
            'link' => "/music",
            'description' => "Lot of new music released for you to enjoy",
            'image' => "static/newmusicbannernew.jpg",
        ]);
    }
}
