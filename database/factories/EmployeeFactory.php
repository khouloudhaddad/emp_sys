<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'identification' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'birth' => $this->faker->dateTime(),
            'salary' => $this->faker->numberBetween(-10000, 10000),
            'material_status' => $this->faker->randomElement(["single","married","divorced"]),
            'bonus' => $this->faker->randomFloat(2, 0, 999999.99),
            'order' => $this->faker->randomNumber(),
            'department_id' => Department::factory(),
        ];
    }
}
