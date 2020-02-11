<?php

use App\Model\Impression;
use Illuminate\Database\Seeder;

class ImpressionSeeder extends Seeder
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
                "message" => "Donec imperdiet congue orci consequat mattis. Donec
                rutrum porttitor <br>
                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                <br>
                Fusce ac mattis nulla. Morbi eget ornare dui.",
                "imgSrc" => "img/testmonial/thumb.png",
                "name" => "Abdurrahman Ramadhan",
                "majors" => "Teknik Komputer",
            ],
            [
                "message" => "Donec imperdiet congue orci consequat mattis. Donec
                rutrum porttitor <br>
                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                <br>
                Fusce ac mattis nulla. Morbi eget ornare dui.",
                "imgSrc" => "img/testmonial/thumb.png",
                "name" => "Falyan Zuril",
                "majors" => "Teknik Komputer",
            ],
        ];

        foreach ($data as $key => $value) {
            Impression::create($value);
        }
    }
}
