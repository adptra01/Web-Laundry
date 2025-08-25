<?php

namespace Database\Seeders;

use App\Models\Category;
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
                'name' => 'Reguler (2 Hari)',
                'estimate' => '(Misal antar hari Jumat selesai Minggu)',
            ],
            [
                'name' => 'Express 12 Jam',
                'estimate' => '(Antar Pagi selesai Sore/Malam)',
            ],
            [
                'name' => 'Express 24 Jam',
                'estimate' => '(Misal antar hari Sabtu selesai Minggu)',
            ],
            [
                'name' => 'Dan lain-lain',
                'estimate' => '(Tidak di ketahui)',
            ],

        ];

        Category::insert($data);
    }
}
