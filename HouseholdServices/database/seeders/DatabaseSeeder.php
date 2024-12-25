<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Role,
    User,
    servicecategory,
};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;

    public function run(): void
    {
        Role::insert([
            ['roleName' => 'Admin'],
            ['roleName' => 'Customer'],
        ]);

        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone_no' => fake()->numerify('###-###-####'),
                'address' => fake()->address(),
                'role_id' => 1,
                'password' => static::$password ??= \Hash::make('password'),
                'remember_token' => \Str::random(10),
            ],
        ]);

        Servicecategory::insert([
            ['servicecategory_name' => 'Cleaning Services'],
            ['servicecategory_name' => 'Plumbing Services'],
            ['servicecategory_name' => 'Gardening Services'],
        ]);
    }
}
