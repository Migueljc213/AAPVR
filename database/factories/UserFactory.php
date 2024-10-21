<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'cpf' => $this->generateFakeCpf(),
            'email_verified_at' => now(),
            'role' => 'user',
            'status' => 'active',
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    private function generateFakeCpf(): string
    {
        $faker = \Faker\Factory::create();

        // Gera os 9 primeiros dígitos
        $cpf = str_pad($faker->randomNumber(9, true), 9, '0', STR_PAD_LEFT);

        // Cálculo do primeiro dígito verificador
        $sum = 0;
        for ($i = 0; $i < 9; $i++) {
            $sum += $cpf[$i] * (10 - $i);
        }
        $firstDigit = 11 - ($sum % 11);
        $firstDigit = ($firstDigit >= 10) ? 0 : $firstDigit;
        $cpf .= $firstDigit;

        // Cálculo do segundo dígito verificador
        $sum = 0;
        for ($i = 0; $i < 10; $i++) {
            $sum += $cpf[$i] * (11 - $i);
        }
        $secondDigit = 11 - ($sum % 11);
        $secondDigit = ($secondDigit >= 10) ? 0 : $secondDigit;
        $cpf .= $secondDigit;

        return $cpf;
    }
}
