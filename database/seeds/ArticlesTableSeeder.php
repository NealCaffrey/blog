<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [1, 2, 3, 4, 5, 6, 7, 8];
        $tags = ['php', 'apache', 'linux', 'mysql'];
        $faker = app(Faker\Generator::class);

        $articles = factory(Article::class)->times(100)->make()->each(function ($article) use ($faker, $type, $tags) {
            $article->type = $faker->randomElement($type);
            $key = array_rand($tags, 1);
            $article->tag = $tags[$key];
        });

        Article::insert($articles->toArray());
    }
}
