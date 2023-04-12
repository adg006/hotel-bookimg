<?php

namespace Database\Seeders;

use App\Models\Admin\Image;
use Illuminate\Database\Seeder;

class CreateImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();

        Image::insert([
            [
                'photo' => 'gallery-1.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-2.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-3.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-4.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-5.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-6.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-7.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'photo' => 'gallery-8.jpg',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ]
        ]);
    }
}
