<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= User::create([
            "name" => "alfin",
            "email" => "alfin@gmail.com",
            "password" => Hash::make("123456789"),
            "phone_number" => "1243334543"
        ]);

        $role = Role::firstOrCreate([
            "role_name" => "admin"
        ]);

        $user->roles()->attach($role->id);
    }
}
