<?php

namespace Database\Factories;
use App\Models\ChecklistGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Checklist>
 */
class ChecklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'name' => $this->faker->name(),
             'completed_tasks' => $this->faker->randomDigitNotNull,
             'total_tasks' => $this->faker->randomDigitNotNull,
             'id_checklist_group' => ChecklistGroup::factory(),
        ];
    }
}
