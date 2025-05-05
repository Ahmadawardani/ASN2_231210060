<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->randomElement(['23', '24']) . $this->faker->numerify('1210###'),
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->randomElement([
                'Ketua HMPS',
                'Wakil Ketua HMPS',
                'Sekretaris 1',
                'Sekretaris 2',
                'Bendahara 1',
                'Bendahara 2'
            ]),
        ];
    }
    
}
