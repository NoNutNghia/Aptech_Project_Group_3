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
                'type_virus' => 'Coronaviridae'
            ],
            [
                'type_virus' => 'Filoviridae'
            ],
            [
                'type_virus' => 'Herpesviridae',
            ],
            [
                'type_virus' => 'Hepadnaviridae'
            ],
            [
                'type_virus' => 'Poxviridae'
            ],
            [
                'type_virus' => 'Yersiniaceae'
            ],
        ]);
    }
}
