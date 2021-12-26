<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'suhag',
            'email' => 'suahg@gmail.com',
            'passsword'=>bcrypt('1234')
        ]);
    }
}
