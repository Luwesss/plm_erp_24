<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LoginUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $role = 0;
        $role_id = $role++;
        $usertype = ($role_id != 0 && $role_id != 40) ? 'employee' : 'student';
        return [
            "id" => fake()->unique()->numberBetween(202000000,202200000),
            "password" => "pass",
            "role_id" => $role_id,
            "usertype" => $usertype,
        ];
    }
}
