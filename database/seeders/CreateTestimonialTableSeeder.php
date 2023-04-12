<?php

namespace Database\Seeders;

use App\Models\Admin\Testimonial;
use Illuminate\Database\Seeder;

class CreateTestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::truncate();

        Testimonial::insert([
            [
                'photo' => 'testimonial-1.jpg',
                'name' => 'Robert Krol',
                'designation' => 'CEO, ABC Company',
                'testimonial' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'
            ],
            [
                'photo' => 'testimonial-2.jpg',
                'name' => 'Sal Harvey',
                'designation' => 'Director, DEF Company',
                'testimonial' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'
            ]
        ]);
    }
}
