<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RocketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rockets')->truncate();

        DB::table('rockets')->insert([
            'name' => 'Falcon 9',
            'active' => true,
            'cost_per_launch' => 50,
            'success_rate_pct' => 98,
            'first_flight' => "2010-06-04",
            'description' => "Falcon 9 is a two-stage rocket designed and manufactured by SpaceX for the reliable and safe transport of satellites and the Dragon spacecraft into orbit.",
            'image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/in-this-spacex-handout-image-a-falcon-9-rocket-carrying-the-news-photo-1591219555.jpg',
            'manufacturer_id' => 1
        ]);

        DB::table('rockets')->insert([
            'name' => 'Falcon 1',
            'active' => false,
            'cost_per_launch' => 6.7,
            'success_rate_pct' => 40,
            'first_flight' => "2006-03-24",
            'description' => "The Falcon 1 was an expendable launch system privately developed and manufactured by SpaceX during 2006-2009. On 28 September 2008, Falcon 1 became the first privately-developed liquid-fuel launch vehicle to go into orbit around the Earth.",
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Falcon_1_Flight_4_liftoff.jpg',
            'manufacturer_id' => 1
        ]);

        DB::table('rockets')->insert([
            'name' => 'Falcon Heavy',
            'active' => true,
            'cost_per_launch' => 90,
            'success_rate_pct' => 100,
            'first_flight' => "2018-02-06",
            'description' => "With the ability to lift into orbit over 54 metric tons (119,000 lb)--a mass equivalent to a 737 jetliner loaded with passengers, crew, luggage and fuel--Falcon Heavy can lift more than twice the payload of the next closest operational vehicle, the Delta IV Heavy, at one-third the cost.",
            'image' => 'https://www.spacex.com/static/images/content/fh_performance.jpg',
            'manufacturer_id' => 1
        ]);

        DB::table('rockets')->insert([
            'name' => 'Starship',
            'active' => true,
            'cost_per_launch' => 7,
            'success_rate_pct' => 0,
            'first_flight' => "2021-12-01",
            'description' => "Starship and Super Heavy Rocket represent a fully reusable transportation system designed to service all Earth orbit needs as well as the Moon and Mars. This two-stage vehicle — composed of the Super Heavy rocket (booster) and Starship (ship) — will eventually replace Falcon 9, Falcon Heavy and Dragon.",
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Starship_%26_Moonset.jpg/1200px-Starship_%26_Moonset.jpg',
            'manufacturer_id' => 1
        ]);

        DB::table('rockets')->insert([
            'name' => 'Saturn V',
            'active' => false,
            'cost_per_launch' => 1230,
            'success_rate_pct' => 100,
            'first_flight' => "1967-11-09",
            'description' => "Saturn V is a retired American super heavy-lift launch vehicle developed by NASA under the Apollo program for human exploration of the Moon. The rocket was human-rated, with three stages, and powered with liquid fuel.",
            'image' => 'https://cdn.mos.cms.futurecdn.net/XioqJS6M7DL9hKGcmVnay6.jpg',
            'manufacturer_id' => 2
        ]);

        DB::table('rockets')->insert([
            'name' => 'Artemis I',
            'active' => false,
            'cost_per_launch' => 4000,
            'success_rate_pct' => 0,
            'first_flight' => "2022-11-14",
            'description' => "Artemis 1, officially Artemis I, is a planned uncrewed Moon-orbiting mission, the first spaceflight in NASA's Artemis program, and the first flight of the agency's Space Launch System rocket and the complete Orion spacecraft.",
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/22/SLSonpadAug17.jpg',
            'manufacturer_id' => 2
        ]);

        DB::table('rockets')->insert([
            'name' => 'Ariane 5',
            'active' => true,
            'cost_per_launch' => 185,
            'success_rate_pct' => 96,
            'first_flight' => "2005-02-12",
            'description' => "A European heavy-lift space launch vehicle that is used to deliver payloads into geostationary transfer orbit or low Earth orbit. It carried the popular James Webb Space Telescope.",
            'image' => 'http://spaceflightnow.com/wp-content/uploads/2021/07/Ariane_5_liftoff.jpg',
            'manufacturer_id' => 3
        ]);

    }

}
