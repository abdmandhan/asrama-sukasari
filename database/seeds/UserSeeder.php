<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                "name" => "Abdurrahman Ramadhan",
                "email" => "abdmandhan@gmail.com",
                "password" => bcrypt('12341234'),
            ],
            [
                "name" => "Falyan Zuril",
                "email" => "falyan@gmail.com",
                "password" => bcrypt('12341234'),
            ],
            [
                "name" => "Agung Bachtiar",
                "email" => "agung@gmail.com",
                "password" => bcrypt('12341234'),
            ],
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
