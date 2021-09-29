<?php

namespace Database\Seeders;

use App\Models\Blog\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name' => 'Programowanie',
            'slug' => 'programowanie',
            'description' => 'Porady ze świata programowania',
            'keywords' => 'programowanie, php, laravel, wzorce projektowe',
        ]);
        Category::insert([
            'name' => 'PHP',
            'slug' => 'php',
            'description' => 'Programowanie w PHP',
            'keywords' => 'programowanie, php, laravel, wzorce projektowe, symfony',
            'parent_id' => 1
        ]);
        Category::insert([
            'name' => 'Systemy operacyjne',
            'slug' => 'systemy-operacyjne',
            'description' => 'Kategoria dotycząca szeroko rozumianych systemów operacynych',
            'keywords' => 'linux, windows, android, system operacyjny',
        ]);
    }
}
