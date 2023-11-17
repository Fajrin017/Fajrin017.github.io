<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' =>$this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(2,8)),
            'barang1' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah1' =>$this->faker->numberBetween(0, 20),
            'satuan1' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi1' => $this->faker->sentence(mt_rand(1,2)),
            'barang2' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah2' =>$this->faker->numberBetween(0, 20),
            'satuan2' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi2' => $this->faker->sentence(mt_rand(1,2)),
            'barang3' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah3' =>$this->faker->numberBetween(0, 20),
            'satuan3' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi3' => $this->faker->sentence(mt_rand(1,2)),
            'barang4' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah4' =>$this->faker->numberBetween(0, 20),
            'satuan4' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi4' => $this->faker->sentence(mt_rand(1,2)),
            'barang5' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah5' =>$this->faker->numberBetween(0, 20),
            'satuan5' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi5' => $this->faker->sentence(mt_rand(1,2)),
            'barang6' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah6' =>$this->faker->numberBetween(0, 20),
            'satuan6' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi6' => $this->faker->sentence(mt_rand(1,2)),
            'barang7' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah7' =>$this->faker->numberBetween(0, 20),
            'satuan7' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi7' => $this->faker->sentence(mt_rand(1,2)),
            'barang8' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah8' =>$this->faker->numberBetween(0, 20),
            'satuan8' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi8' => $this->faker->sentence(mt_rand(1,2)),
            'barang9' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah9' =>$this->faker->numberBetween(0, 20),
            'satuan9' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi9' => $this->faker->sentence(mt_rand(1,2)),
            'barang10' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah10' =>$this->faker->numberBetween(0, 20),
            'satuan10' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi10' => $this->faker->sentence(mt_rand(1,2)),
            'barang11' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah11' =>$this->faker->numberBetween(0, 20),
            'satuan11' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi11' => $this->faker->sentence(mt_rand(1,2)),
            'barang12' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah12' =>$this->faker->numberBetween(0, 20),
            'satuan12' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi12' => $this->faker->sentence(mt_rand(1,2)),
            'barang13' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah13' =>$this->faker->numberBetween(0, 20),
            'satuan13' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi13' => $this->faker->sentence(mt_rand(1,2)),
            'barang14' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah14' =>$this->faker->numberBetween(0, 20),
            'satuan14' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi14' => $this->faker->sentence(mt_rand(1,2)),
            'barang15' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah15' =>$this->faker->numberBetween(0, 20),
            'satuan15' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi15' => $this->faker->sentence(mt_rand(1,2)),
            'barang16' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah16' =>$this->faker->numberBetween(0, 20),
            'satuan16' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi16' => $this->faker->sentence(mt_rand(1,2)),
            'barang17' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah17' =>$this->faker->numberBetween(0, 20),
            'satuan17' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi17' => $this->faker->sentence(mt_rand(1,2)),
            'barang18' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah18' =>$this->faker->numberBetween(0, 20),
            'satuan18' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi18' => $this->faker->sentence(mt_rand(1,2)),
            'barang19' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah19' =>$this->faker->numberBetween(0, 20),
            'satuan19' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi19' => $this->faker->sentence(mt_rand(1,2)),
            'barang20' => $this->faker->sentence(mt_rand(1,2)),
            'jumlah20' =>$this->faker->numberBetween(0, 20),
            'satuan20' => $this->faker->sentence(mt_rand(1,2)),
            'kondisi20' => $this->faker->sentence(mt_rand(1,2)),

            // 'post_id' => mt_rand(1,3),
    
            // 'body'=> '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'body'=> collect($this->faker->paragraphs(mt_rand(5,10)))
                    ->map(fn($p)=>"<p>$p</p>")
                    ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2),
            'post_status_id' => mt_rand(1,2)
        ];
    }
}
