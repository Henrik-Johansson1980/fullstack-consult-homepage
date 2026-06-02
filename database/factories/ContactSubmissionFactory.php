<?php

namespace Database\Factories;

use App\Models\ContactSubmission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ContactSubmission>
 */
class ContactSubmissionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'company' => fake()->optional()->company(),
            'message' => fake()->paragraph(3),
            'budget' => fake()->optional()->randomElement(['under_10k', '10k_50k', '50k_100k', 'over_100k', 'not_sure']),
            'read_at' => fake()->optional()->dateTimeBetween('-1 month', 'now'),
        ];
    }

    public function unread(): static
    {
        return $this->state(['read_at' => null]);
    }

    public function read(): static
    {
        return $this->state(['read_at' => now()]);
    }
}
