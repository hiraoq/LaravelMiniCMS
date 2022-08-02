<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Inspiring;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random_date = $this->faker->dateTimeBetween('-1year', '-1day');
        $quate = Inspiring::quote();
        $quate = explode(' - ',$quate);
        return [
            'title' => $quate[1],
            'body' => $quate[0],
            'is_public' => $this->faker->boolean(90),
            'published_at' => $random_date,
            'created_at' => $random_date,
            'updated_at' => $random_date
        ];
    }
}
