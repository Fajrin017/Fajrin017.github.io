<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sub>
 */
class SubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'barang' => $this->faker->sentence(mt_rand(2,6)),
            'jumlah' =>$this->faker->numberBetween(0, 20),
            'satuan' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi' => $this->faker->sentence(mt_rand(1,2)),
            'post_id' => mt_rand(1,10),
            'user_id' => mt_rand(1,3),
            
        ];
    }
}
