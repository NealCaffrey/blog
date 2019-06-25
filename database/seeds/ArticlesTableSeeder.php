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
        $type = [0, 1, 2];
        $faker = app(Faker\Generator::class);

        $articles = factory(Article::class)->times(100)->make()->each(function ($article) use ($faker, $type) {
            $article->type = $faker->randomElement($type);
        });

        Article::insert($articles->toArray());
    }
}
