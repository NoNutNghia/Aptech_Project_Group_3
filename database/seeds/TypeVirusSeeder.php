<?php

use Illuminate\Database\Seeder;
use App\Models\VirusType;

class TypeVirusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VirusType::insert([
            [
                'type_virus' => 'Ebolavirus'
            ],
            [
                'type_virus' => 'Enterobacteriaceae'
            ],
            [
                'type_virus' => 'Epstein–Barr'
            ],
            [
                'type_virus' => 'SARS-CoV-1'
            ],
            [
                'type_virus' => 'MERS-CoV'
            ],
            [
                'type_virus' => 'SARS-CoV-2'
            ]
        ]);
    }
}
