<?php

use Illuminate\Database\Seeder;
use App\Models\TrendingTopics\TrendingTopics;

class TrendingTopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trending_topicsData = [
            ['title' => 'trendingtopics', 'description' => 'Massive jump in reported Covid-19 cases on Tuesday as 1981 infections surface in 24 hrs
', 'posted_by' => 1],
            ['title' => 'topics', 'description' => 'New York museum to return two wooden Art works to Nepal', 'posted_by' => 1],
            ['title' => 'trending', 'description' => 'Madhav Kumar , the Chairperson of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
            ['title' => 'topic', 'description' => ' of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
        ];

        foreach ($trending_topicsData as $topics) {
            TrendingTopics::create($topics);
        }
    }

}
