<?php

namespace Database\Factories;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'username' => $this->faker->name(),
           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
           'first_name' => $this->faker->firstName,
           'second_name' => $this->faker->firstName,
           'first_surname' => $this->faker->lastName,
           'second_surname' => $this->faker->lastName,
           'email' => $this->faker->unique()->safeEmail(),
           'role_id' => Role::factory(),
           'first_time' => $this->faker->boolean,
           'remember_token' => Str::random(10),
        ];
    }
}
