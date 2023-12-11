<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $a = new User();
        $a ->name = "Mohanad";
        $a-> email = "mohanad@gmail.com";
        $a-> password = "mohanad123";
        $a->save();
        User::factory()->count(10)->create();
    }
}
