<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition(): array
    {
        $max = (int) Category::max('id');
        $parentId = $max > 0 ? mt_rand(1, $max) : null;
        return [
            'title' => $title = $this->faker->title().' '.$this->faker->name,
            'description' => $this->faker->text(),
            'slug' => Str::slug($title),
            'parent_id' => $parentId,
        ];
    }
}
