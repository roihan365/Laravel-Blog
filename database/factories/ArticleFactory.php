<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $title = $this->faker->sentence;
        
        $post = collect($this->faker->paragraphs(rand(5, 15)))
        ->map(function($item){
            return "<p>$item</p>";
        })->toArray();

        $post = implode($post);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => "https://oboto.ahay.my.id/storage/images/5shS0BRcpq8OxAJ2sReyCTAsHvPwgQrOB90z1lAg.jpg",
            'content' => $post,
            'user_id' => 1,
            'category_id' => 1,
            'status' => 'PUBLISH',
        ];
    }
}
