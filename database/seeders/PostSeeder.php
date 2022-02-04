<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->user_id = 1;
            $post->title = $faker->words(3, $asText = true);
            $post->content = $faker->text(200);
            $post->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->user_id = 2;
            $post->title = $faker->words(3, $asText = true);
            $post->content = $faker->text(200);
            $post->save();
        }
    }
}
