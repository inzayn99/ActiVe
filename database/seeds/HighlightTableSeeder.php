<?php

use Illuminate\Database\Seeder;
use App\Models\highlight\highlight;

class HighlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $highlightData = [
            ['title' => 'Tomorrow', 'description' => 'Massive jump in reported Covid-19 cases on Tuesday as 1981 infections surface in 24 hrs
', 'posted_by' => 1],
            ['title' => 'friday', 'description' => 'New York museum to return two wooden Art works to Nepal', 'posted_by' => 1],
            ['title' => 'sunday', 'description' => 'Madhav Kumar Nepal, the Chairperson of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
            ['title' => 'monday', 'description' => ' of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
        ];

        foreach ($highlightData as $high) {
            highlight::create($high);
        }
    }

}
