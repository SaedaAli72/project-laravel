<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class university extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        foreach (range(1,10) as $value) {
            # code...
            DB::table('university')->insert([
                'name' => $faker->sentence(5),
                'code' => $faker->sentence(5),
                'location' =>$faker->sentence(5),
                'avatar_id' => $faker->sentence(5),
            ]);
        }
    }
}
