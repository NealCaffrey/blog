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
        $data = [
            ['title' => 'PHP'],
            ['title' => 'MySQL'],
            ['title' => 'Linux'],
            ['title' => 'Web'],
            ['title' => 'Algorithm'],
            ['title' => 'Review'],
            ['title' => 'Other'],
        ];

        DB::table('categories')->insert($data);
    }
}
