<?php

namespace Database\Seeders;

use App\Models\Admin\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateSliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::truncate();

        Slider::insert([
            [
                'photo' => 'slide-1.jpg',
                'heading' => 'BEST HOTEL IN THE CITY',
                'sub_heading' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.',
                'button_text' => 'READ MORE',
                'button_url' => '#'
            ],
            [
                'photo' => 'slide-2.jpg',
                'heading' => 'QUALITY ROOMS FOR THE GUESTS',
                'sub_heading' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.',
                'button_text' => 'READ MORE',
                'button_url' => '#'
            ]
        ]);
    }
}
