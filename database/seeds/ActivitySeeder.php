<?php

use App\Model\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "weight" => 1,
                "imgSrc" => "img/portfolio/1.png",
            ],
            [
                "weight" => 0,
                "imgSrc" => "img/portfolio/2.png",
            ],
            [
                "weight" => 0,
                "imgSrc" => "img/portfolio/3.png",
            ],
            [
                "weight" => 0,
                "imgSrc" => "img/portfolio/4.png",
            ],
        ];

        foreach ($data as $key => $value) {
            Activity::create($value);
        }
    }
}
