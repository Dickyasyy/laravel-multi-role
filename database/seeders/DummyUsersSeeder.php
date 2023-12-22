<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name"      => "operator",
                "email"     => "operator@gmail.com",
                "password"  => bcrypt("operator"),
                "role"      => "operator",
            ],
            [
                "name"      => "keuangan",
                "email"     => "keuangan@gmail.com",
                "password"  => bcrypt("keuangan"),
                "role"      => "keuangan",
            ],
            [
                "name"      => "marketing",
                "email"     => "marketing@gmail.com",
                "password"  => bcrypt("marketing"),
                "role"      => "marketing",
            ],
        ];
        
            foreach ($users as $user) {
                User::create($user);
        }
    }
}