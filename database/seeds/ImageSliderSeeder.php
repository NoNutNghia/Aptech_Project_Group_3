<?php

use Illuminate\Database\Seeder;
use App\Models\ImageSlider;

class ImageSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ImageSlider::insert([
            [
                'img' => 'ImageSlider/halting-workplace-01.png'
            ],
            [
                'img' => 'ImageSlider/_111195673_corona_whatyouneedtodo_without_title-nc.png'
            ],
            [
                'img' => 'ImageSlider/istockphoto-1290696373-1024x1024.jpg'
            ],
            [
                'img' => 'ImageSlider/Doctors-note-protection.png'
            ],
            [
                'img' => 'ImageSlider/VaccinevsCOVID-v2-fb4c37c2414a4010a16a1f17439256b2.jpg'
            ]
        ]);
    }
}
