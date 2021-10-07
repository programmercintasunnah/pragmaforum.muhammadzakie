<?php

namespace Database\Seeders;

use App\Models\Postingan;
use Illuminate\Database\Seeder;

class PostinganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postingans = [
            [
                'forum_id' => 1,
                'content' => 'error assignrole spatie laravel 8',
                'created_by' => 1,
                'updated_by' => null
            ],

        ];
        foreach ($postingans as $postingan) {
            Postingan::create($postingan);
        }
    }
}
