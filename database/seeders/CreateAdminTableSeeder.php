<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        Admin::insert([
            'name' => 'Arindam Dasgupta',
            'email' => 'arindamdasgupta6@gmail.com',
            'password' => Hash::make('1234'),
            'photo' => 'admin.png'
        ]);
    }
}
