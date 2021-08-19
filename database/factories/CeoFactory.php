<?php

namespace Database\Factories;

use App\Models\Ceo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CeoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ceo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                  => $this->faker->name,
            'company_name'          => $this->faker->unique()->company,
            'year'                  => $this->faker->year,
            'company_headquarters'  => $this->faker->city,
            'what_company_does'     => $this->faker->sentence
        ];
    }
}
