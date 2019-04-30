<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,500) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->word,
                'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }
}
