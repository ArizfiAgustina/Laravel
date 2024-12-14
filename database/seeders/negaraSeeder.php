<?php

namespace Database\Seeders;

use App\Models\negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class negaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            negara::create([
                'kode_negara' => $faker->countryCode(),
                'nama_negara' => $faker->country(),
            ]);
        }
    }
}