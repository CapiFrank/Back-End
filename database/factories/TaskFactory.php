<?php

namespace Database\Factories;
use App\Models\Note;
use App\Models\Label;
use App\Models\Checklist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'my_day' => $this->faker->boolean,
             'important' => $this->faker->boolean,
             'title'=> $this->faker->title(),
             'contents' => $this->faker->paragraph(2),
             'final_date' => now(),
             'note_id' => Note::factory(),
             'label_id' => Label::factory(),
             'checklist_id' => Checklist::factory(),
             'user_id' => User::factory(),
        ];
    }
}
