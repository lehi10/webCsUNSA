<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(webCS\Post::class,300)->create()->each(function(webCS\Post $post){
            $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20)
            ]);

        });

    }
}
