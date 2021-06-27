<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            \App\Models\User::DEFAULT_ROLE, 'admin', 'customer'
        ];

        foreach ($roles as $role) {
            $name = ucwords(str_replace('-', ' ', $role));
            Role::updateOrCreate(
                [ 'name' => $name, ],
                [ 'slug' => $role, 'description' => $name, 'status' => 1 ]
            );
        }
    }
}
