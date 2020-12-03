<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class avatar extends Seeder
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
            DB::table('avatars')->insert([
                'path' => $faker->sentence(5),
                'extention' => $faker->sentence(5),
                'type' =>$faker->sentence(5),
            ]);
        }
        



    }
}
