<?php

use Illuminate\Database\Seeder;

class FlashNewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flashNewsData = [
            ['title' => 'react', 'description' => 'hungrymindinisde'],
            ['title' => 'javascript', 'description' => 'hungrymindinisde'],

        ];
        foreach ($flashNewsData as $news) {
            FlashNews::create($news);
        }
    }
}
