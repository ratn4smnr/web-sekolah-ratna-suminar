<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->unique()->numerify('##################'),
            'nip' => fake()->name(),
            'jabatan' =>fake()->randomElement([
                    'Guru',
                    'TU',
                    'Kepala Sekolah',
            ]),
            'mapel' =>fake()->randomElement([
                    'Basis Data',
                    'Pemprograman',
                    'Matematika',
                    'Bahasa Indonesia',
            ]),
            'foto'=>null,
            ];
    }
}
