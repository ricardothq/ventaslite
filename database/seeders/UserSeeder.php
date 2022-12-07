<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Fax',
            'phone' => '3456623447',
            'email' => 'luisfax@gmail.com',
            'profile' => 'Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')

        ]);
        User::create([
            'name' => 'Melisa allanes',
            'phone' => '345612347',
            'email' => 'melisa@gmail.com',
            'profile' => 'Employed',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')

        ]);
    }
}
