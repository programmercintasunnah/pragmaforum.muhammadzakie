<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name' => "muhammad zakie",
                'username' => 'muhammadzakie22',
                'password' => bcrypt('zakie'),
            ],
            [
                'name' => "uwais alqorni",
                'username' => 'uwais22',
                'password' => bcrypt('uwais'),
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
