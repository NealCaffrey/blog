<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['PHP', 'MySQL', 'Linux'];
        $faker = app(Faker\Generator::class);

        $categorys = factory(Category::class)->times(3)->make()->each(function ($category) use ($faker, $title) {
            $category->title = $title[$faker->randomElement([0,1,2])];
        });

        Category::insert($categorys->toArray());
    }
}
