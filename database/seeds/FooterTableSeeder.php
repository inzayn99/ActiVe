<?php

use Illuminate\Database\Seeder;
use App\Models\Footer\Footer;

class FooterTableSeeder extends Seeder
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
            ['title' => 'nepal', 'description' => 'New York museum to return two wooden Art works to Nepal', 'posted_by' => 1],
            ['title' => 'copyright', 'description' => 'Madhav Kumar Nepal, the Chairperson of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
            ['title' => 'footer', 'description' => ' of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
        ];

        foreach ($highlightData as $high) {
            Footer::create($high);
        }
    }

}
