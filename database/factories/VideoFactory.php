<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Video::class;
    public function definition()
    {
        $persionFaker = \Faker\Factory::create('fa_IR');
        return [
            'name' => $persionFaker->name(),
            'url' => 'https://file-examples.com/storage/fe19e15eac6560f8c936c41/2017/04/file_example_MP4_480_1_5MG.mp4',
            'length' => $this->faker->numberBetween(100,255),
            'slug' => $this->faker->slug(),
            'description' => $persionFaker->realText(rand(10,100)),
            'thumbnail' => 'https://loremflickr.com/446/240/world?random='. rand(1,1000),
            'category_id' => rand(1,7)
        ];
    }
}
