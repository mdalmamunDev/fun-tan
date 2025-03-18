<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User; // Ensure you have the User model imported
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        // Define roles
        $roles = [
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'Provider'],
            ['name' => 'Subscriber'],
        ];

        // Create roles
        foreach ($roles as $roleData) {
            $role = Role::create($roleData);

            // Create a user for each role
            User::create([
                'name' => $role->name,
                'email' => strtolower(str_replace(' ', '', $role->name)) . '@gmail.com',
                'password' => Hash::make('123456'),
                'role_id' => $role->id,
            ]);
        }
    }
}
