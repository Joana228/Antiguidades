<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pratos>
 */
class PratosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
               'tipo' => $this->faker->randomElement([
                   'prato raso',
                   'prato fundo',
                   'prato sobremesa'
               ]),
               ##########################################################
               'marca' => $this->faker->randomElement([
                   'Porto Brasil',
                   'vista alegre',
                   'Luiz salvador',
                   'Joana'
               ]),
               ##########################################################
               'ano_fabricacao' => $this->faker->year('m/Y'),
               ############################################################
               'preco' => $this->faker->randomFloat(1,20,30)


           ];
    }
}
