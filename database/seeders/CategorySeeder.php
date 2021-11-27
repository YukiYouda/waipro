<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Laravel']);
        Category::create(['name' => 'PHP']);
        Category::create(['name' => 'Javascript']);
        Category::create(['name' => 'Django']);
        Category::create(['name' => 'Python']);
        Category::create(['name' => 'React']);
        Category::create(['name' => 'Ruby']);
        Category::create(['name' => 'Ruby on Rails']);
        Category::create(['name' => 'Vue.js']);
    }
}
