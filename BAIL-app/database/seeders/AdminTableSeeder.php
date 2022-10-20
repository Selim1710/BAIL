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
            'email' => 'bgd.admin@gmail.com',
            'password'=>bcrypt('11111111'),
            'role'=>'admin'
        ]);
    }
}
