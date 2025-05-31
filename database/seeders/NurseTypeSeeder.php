<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NurseType;


class NurseTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            ['id' => 1, 'name' => 'Auxiliar de Enfermagem'],
            ['id' => 2, 'name' => 'Enfermeira(o)'],
            ['id' => 3, 'name' => 'Supervisão']
        ];

        foreach ($types as $type) {
            NurseType::updateOrCreate(['id' => $type['id']], $type);
        }
    }
}
