<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                'name' => 'Super Admin',
                'email' => 'super-admin@gmail.com',
                'phone' => '0368686868',
                'password' => Hash::make('123456'),
                'birthday' => '2000-01-01',
                'role_id' => 1,
                'is_active' => true,
        ];

        DB::table('users')->insert($data);
    }
}
