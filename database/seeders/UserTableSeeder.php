<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super_admin',
            'email' => 'root@kathford.com',
            'password' => bcrypt('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
