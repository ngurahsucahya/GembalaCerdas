<?php

namespace Database\Factories;

use App\Models\Ternak;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class TernakFactory extends Factory
{
    protected $model = Ternak::class;

    public function definition()
    {
        return [
            'rfid' => $this->faker->unique()->numerify('RFID###'),
            'nama_ternak' => $this->faker->unique()->name,
            'ras' => $this->faker->randomElement(['Garut','Ekor Gemuk','Ekor Tipis','Merio','Suffolk','Texel','Domer','Dorper','Corriedele','Batur','Barbados Blackbelly','Compass Agrinak']),
            'jenis_kelamin' => $this->faker->randomElement(['Jantan', 'Betina']),
            'tanggal_lahir' => $this->faker->date,
            'bobot_badan' => $this->faker->randomFloat(2, 10, 200),
            'status_sekarang' => $this->faker->randomElement(['Pejantan', 'Induk', 'Anak']),
            'deskripsi_fenotip' => $this->faker->text,
            'statusable_id' => null,
            'statusable_type' => null,
            'id_anak' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}