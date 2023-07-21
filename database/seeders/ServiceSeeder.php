<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
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
                'category_id' => '1',
                'name' => 'Cuci + setrika',
                'price' => 6000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '1',
                'name' => 'Setrika saja',
                'price' => 4000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '1',
                'name' => 'Cuci saja',
                'price' => 4000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '2',
                'name' => 'Cuci + setrika',
                'price' => 10000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '2',
                'name' => 'Setrika saja',
                'price' => 8000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '2',
                'name' => 'Cuci saja',
                'price' => 8000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '3',
                'name' => 'Cuci + setrika',
                'price' => 7000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '3',
                'name' => 'Setrika saja',
                'price' => 5000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '3',
                'name' => 'Cuci saja',
                'price' => 5000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '4',
                'name' => 'Karpet',
                'price' => 10000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '4',
                'name' => 'Gorden',
                'price' => 10000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '4',
                'name' => 'Gorden Tipis (Dalam)',
                'price' => 15000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '4',
                'name' => 'Pakaian Bayi',
                'price' => 10000,
                'unit' => 'Kg',
            ],
            [
                'category_id' => '4',
                'name' => 'Selimut',
                'price' => 15000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Bedcover',
                'price' => 25000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Bedcover Besar',
                'price' => 35000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Bedcover 1 Set (Bedcover, Sprei, Sarung Bantal)',
                'price' => 35000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Tas',
                'price' => 25000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Sepatu',
                'price' => 25000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Helm',
                'price' => 15000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Boneka',
                'price' => 25000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Jaket Tebal',
                'price' => 20000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Jas atau Blezzer',
                'price' => 20000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Setelan Jas atau Blezzer',
                'price' => 30000,
                'unit' => 'Pcs',
            ],
            [
                'category_id' => '4',
                'name' => 'Kebaya atau Gaun',
                'price' => 30000,
                'unit' => 'Pcs',
            ],
        ];

        Service::insert($data);
    }
}
