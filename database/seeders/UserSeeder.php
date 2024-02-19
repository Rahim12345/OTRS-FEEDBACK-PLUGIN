<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'login'=>'',
            'pw'=>'',
            'title'=>'',
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'valid_id'=>1,
            'create_time'=>Carbon::now(),
            'create_by'=>1,
            'change_time'=>Carbon::now(),
            'change_by'=>1,
            'name'=>'Admin Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
