<?php

use App\Model\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
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
                "imgSrc" => "img/team/1.png",
                "facebookSrc" => "#",
                "twitterSrc" => "#",
                "instagramSrc" => "#",
                "name" => "Teja Wahyu Ilham",
                "position" => "Coordinator Asrama",
                "majors" => "Analisis Kimia",
            ],
            [
                "imgSrc" => "img/team/2.png",
                "facebookSrc" => "#",
                "twitterSrc" => "#",
                "instagramSrc" => "#",
                "name" => "Vicky Saputra",
                "position" => "Kepenghunian & Kerumahtanggaan",
                "majors" => "Manajemen Agribisnis",
            ],
            [
                "imgSrc" => "img/team/3.png",
                "facebookSrc" => "#",
                "twitterSrc" => "#",
                "instagramSrc" => "#",
                "name" => "William Wisnu",
                "position" => "Bendahara",
                "majors" => "Manajemen Industri",
            ],
            [
                "imgSrc" => "img/team/4.png",
                "facebookSrc" => "#",
                "twitterSrc" => "#",
                "instagramSrc" => "#",
                "name" => "Rehanta Alpharel",
                "position" => "Sekretaris",
                "majors" => "Teknik Komputer",
            ],

        ];

        foreach ($data as $key => $value) {
            Team::create($value);
        }
    }
}
