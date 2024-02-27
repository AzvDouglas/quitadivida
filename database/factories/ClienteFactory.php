<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpf' => $this->faker->unique()->numerify('###########'),
            
            'nome' => $this->faker->name,
            'telefones' => $this->faker->phoneNumber,
            'emails' => $this->faker->unique()->safeEmail,
            'nascimento' => $this->faker->date(),
            'contactado_em' => $this->faker->date(),
            'coletado_em' => $this->faker->date(),
            ];
    }
}
