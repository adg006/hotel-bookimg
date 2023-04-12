<?php

namespace Database\Seeders;

use App\Models\Admin\Video;
use Illuminate\Database\Seeder;

class CreateVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();

        Video::insert([
            [
                'video_id' => '1234567890',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'video_id' => '1234567890',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'video_id' => '1234567890',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ],
            [
                'video_id' => '1234567890',
                'description' => 'Haaland scores before going off injured in Dortmund win and it is very real'
            ]
        ]);
    }
}
