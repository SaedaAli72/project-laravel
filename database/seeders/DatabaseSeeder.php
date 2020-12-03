<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            avatar::class,
            college::class,
            department::class,
            index::class,
            sseq::class,
            ssexam::class,
            ssquestion::class,
            sstesolution::class,
            sstexam::class,
            staffsubject::class,
            studentsubject::class,
            subject::class,
            university::class,
            user::class,
            
        ]);
    }
}
