<?php

namespace Database\Seeders;

use App\Models\provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class provinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            provinsi::create([
                'kode_provinsi' => $faker->postCode(),
                'nama_provinsi' => $faker->state(),
                'kota'=> $faker->city(),
            ]);
        }
    }
}
