<?php
namespace Database\Factories;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->numberBetween(2500, 8000),
            'employer_id' => Employer::factory(),
        ];
    }
}
