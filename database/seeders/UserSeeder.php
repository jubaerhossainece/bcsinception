<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
        	'role_id' => Role::where('slug', 'superAdmin')->first()->id,
        	'name' => 'Bcs Inception',
        	'email' => 'superadmin@example.com',
        	'password' => Hash::make('12345678'),
            'status' => true
        ]);

        User::updateOrCreate([
        	'role_id' => Role::where('slug', 'user')->first()->id,
        	'name' => 'Md. Jubaer Hossain',
        	'email' => 'user@example.com',
        	'password' => Hash::make('12345678'),
            'status' => false
        ]);
    }
}
