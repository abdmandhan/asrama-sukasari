<?php

use App\Model\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
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
                "name" => "Komunikasi",
                "prefix" => "A",
            ],
            [
                "name" => "Ekowisata",
                "prefix" => "B",
            ],
            [
                "name" => "Manajemen Informatika",
                "prefix" => "C",
            ],
            [
                "name" => "Teknik Komputer",
                "prefix" => "D",
            ],
            [
                "name" => "Supervisor Jaminan Mutu Pangan",
                "prefix" => "E",
            ],
            [
                "name" => "Manajemen Industri Jasa Makan dan Gizi",
                "prefix" => "F",
            ],
            [
                "name" => "Teknologi Industri Benih",
                "prefix" => "G",
            ],
            [
                "name" => "Teknologi Produksi dan Manajemen Perikanan Budidaya",
                "prefix" => "H",
            ],
            [
                "name" => "Teknologi dan Manejemen Ternak",
                "prefix" => "I",
            ],
            [
                "name" => "Manajemen Agribisnis",
                "prefix" => "J",
            ],
            [
                "name" => "Manajemen Industri",
                "prefix" => "K",
            ],
            [
                "name" => "Analisis Kimia",
                "prefix" => "L",
            ],
            [
                "name" => "Teknik dan Manajemen Lingkungan",
                "prefix" => "M",
            ],
            [
                "name" => "Akuntansi",
                "prefix" => "N",
            ],
            [
                "name" => "Paramedik Veteriner",
                "prefix" => "O",
            ],
            [
                "name" => "Teknologi Produksi dan Manejemen Perkebunan",
                "prefix" => "P",
            ],
            [
                "name" => "Teknologi Produksi dan Pengembangan Masyarakat Pertanian",
                "prefix" => "Q",
            ],
        ];

        foreach ($data as $key => $value) {
            Major::create($value);
        }
    }
}
