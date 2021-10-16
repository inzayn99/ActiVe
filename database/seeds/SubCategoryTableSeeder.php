<?php

use Illuminate\Database\Seeder;
use App\Models\SubCategory\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subCategoryData = [
            ['sub_cat_name' => 'About', 'slug' => 'about','cat_id'=>1, 'posted_by' => 1],
            ['sub_cat_name' => 'Contact', 'slug' => 'contact','cat_id'=>2, 'posted_by' => 1],
            ['sub_cat_name' => 'Other Archives', 'slug' => 'other archives','cat_id'=>2, 'posted_by' => 1],
            ['sub_cat_name' => 'Dropdown Levels', 'slug' => 'dropdown level','cat_id'=>1, 'posted_by' => 1],
            ['sub_cat_name' => 'Support', 'slug' => 'support','cat_id'=>2, 'posted_by' => 1],
            ['sub_cat_name' => 'Documentation', 'slug' => 'document','cat_id'=>1, 'posted_by' => 1],
            ['sub_cat_name' => 'RTL Demo', 'slug' => 'rtl demo','cat_id'=>2, 'posted_by' => 1],
            ['sub_cat_name' => 'Buy Active!', 'slug' => 'buy archive','cat_id'=>2, 'posted_by' => 1]
        ];
        foreach ($subCategoryData as $subCat){
            SubCategory::create($subCat);
        }
    }
}
