<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Benjie Lenteria',
            'email' => 'benjielenteria@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Password123')
        ],
        [
            'name' => 'Geneva Postrana',
            'email' => 'geneva@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Password123')
        ],
        [
            'name' => 'Ronald Quino',
            'email' => 'ronalquino@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Password123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
