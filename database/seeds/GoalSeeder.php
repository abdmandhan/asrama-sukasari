<?php

use App\Model\Goal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalSeeder extends Seeder
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
                "transision" => "fadeInLeft",
                "imgSrc" => "img/svg_icon/1.svg",
                "title" => "Leadership",
                "desc" => "Lorem
                ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.",
            ],
            [
                "transision" => "fadeInUp",
                "imgSrc" => "img/svg_icon/2.svg",
                "title" => "Family",
                "desc" => "Lorem
                ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.",
            ],
            [
                "transision" => "fadeInRight",
                "imgSrc" => "img/svg_icon/3.svg",
                "title" => "Religion",
                "desc" => "Lorem
                ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.",
            ],
        ];

        foreach ($data as $key => $value) {
            Goal::create($value);
        }
    }
}
