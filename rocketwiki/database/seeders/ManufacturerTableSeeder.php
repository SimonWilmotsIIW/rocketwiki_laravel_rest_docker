<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturer')->truncate();

        DB::table('manufacturer')->insert([
            'name' => 'SpaceX',
            'logo' => 'https://1000logos.net/wp-content/uploads/2020/09/SpaceX-Logo.jpg',
        ]);

        DB::table('manufacturer')->insert([
            'name' => 'NASA',
            'logo' => 'https://www.nasa.gov/sites/default/files/thumbnails/image/nasa-logo-web-rgb.png',
        ]);

        DB::table('manufacturer')->insert([
            'name' => 'ESA',
            'logo' => 'https://upload.wikimedia.org/wikipedia/en/a/a7/ESA_emblem_seal.png',
        ]);
    }
}
