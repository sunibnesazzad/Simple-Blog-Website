<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Laravel']);
        Category::create(['name' => 'Android']);
        Category::create(['name' => 'Php']);
        Category::create(['name' => 'Java']);
        Category::create(['name' => 'C#']);
        Category::create(['name' => 'C & C++']);
        Category::create(['name' => 'Spring']);
        Category::create(['name' => 'Javascript']);
        Category::create(['name' => 'JQuery']);
        Category::create(['name' => 'Ajax']);
        Category::create(['name' => 'Node-js']);
        Category::create(['name' => 'Sails']);
        Category::create(['name' => 'Express']);
        Category::create(['name' => 'Rubi on Rail']);
        Category::create(['name' => 'Angular']);
        Category::create(['name' => 'Objective C']);
        Category::create(['name' => 'Python']);
        Category::create(['name' => 'Networking']);
        Category::create(['name' => 'Computer Architecture']);
        Category::create(['name' => 'Data Communication']);
        Category::create(['name' => 'Machine Learning']);
        Category::create(['name' => 'Mathematics']);
    }
}
