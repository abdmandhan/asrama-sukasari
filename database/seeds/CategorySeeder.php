<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                "name" => "Leadership"
            ],
            [
                "name" => "Religion"
            ],
            [
                "name" => "Science"
            ],
            [
                "name" => "Politics"
            ],
            [
                "name" => "Viral"
            ],
            [
                "name" => "Information"
            ],
            [
                "name" => "Asrama IPB Sukasari"
            ],

        ];

        foreach ($data as $key => $value) {
            Category::create($value);
        }
    }
}
