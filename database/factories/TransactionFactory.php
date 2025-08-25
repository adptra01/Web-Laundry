<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'category_id' => function () {
                return Category::all()->random();
            },
            'service_id' => function () {
                return Service::all()->random();
            },
            'costumer' => $this->faker->name(),
            'telp' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'weight' => rand(1, 10),
            'totalTransaction' => function () {
                $randomService = Service::all()->random();
                $randomNumber = mt_rand(1, 10); // Adjust the range as needed

                return $randomService->price * $randomNumber;
            },
            'status' => rand(0, 1),
            'payment' => rand(0, 1),
            'invoice' => 'LDRY/'.Carbon::now()->format('dmy').'/'.$this->faker->name(),
            'created_at' => $this->faker->dateTimeBetween('-1 years', now()),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', now()),
        ];

    }
}
