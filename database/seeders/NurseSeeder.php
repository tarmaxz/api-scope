<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nurse;
use App\Models\NurseType;
use Faker\Factory as Faker;

class NurseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');
        $typeIds = NurseType::pluck('id')->toArray();

        foreach (range(1, 50) as $i) {
            Nurse::create([
                'name'     => $faker->name,
                'nurse_type_id' => $faker->randomElement($typeIds),
            ]);
        }
    }
}
