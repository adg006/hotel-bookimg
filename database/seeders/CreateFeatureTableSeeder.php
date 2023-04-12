<?php

namespace Database\Seeders;

use App\Models\Admin\Feature;
use Illuminate\Database\Seeder;

class CreateFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::truncate();

        Feature::insert([
            [
                'feature_icon' => 'fa-solid fa-clock',
                'feature_title' => '24 hour room service',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-solid fa-wifi',
                'feature_title' => 'Free wifi',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-brands fa-superpowers',
                'feature_title' => 'Enjoy free nights',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-solid fa-money-bill',
                'feature_title' => 'Save up to 40%',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-sharp fa-solid fa-mug-saucer',
                'feature_title' => 'Complimentary Breakfast',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-solid fa-crosshairs',
                'feature_title' => 'Swimming Pool',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-solid fa-cubes',
                'feature_title' => 'Gym and Fitness',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ],
            [
                'feature_icon' => 'fa-solid fa-utensils',
                'feature_title' => 'Top Class Restaurant',
                'feature_description' => 'If you find a lower online rate, we will match it and give you an additional 25% off on your stay.'
            ]

        ]);
    }
}
