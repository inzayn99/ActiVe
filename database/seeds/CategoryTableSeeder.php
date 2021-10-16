<?php

use Illuminate\Database\Seeder;
use App\Models\Category\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categoryData = [
            ['cat_name' => 'Home', 'slug' => 'Home', 'posted_by' => 1],
            ['cat_name' => 'Pages', 'slug' => 'pages', 'posted_by' => 1],
            ['cat_name' => 'Post', 'slug' => 'post', 'posted_by' => 1],
            ['cat_name' => 'Components', 'slug' => 'components', 'posted_by' => 1]
        ];
        foreach ($categoryData as $cat){
            Category::create($cat);
        }
    }
}
