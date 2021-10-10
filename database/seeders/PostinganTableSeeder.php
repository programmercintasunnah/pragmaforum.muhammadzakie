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
                'content' => 'kenapa php nya error we?',
                'created_by' => 2,
                'updated_by' => null
            ],
            [
                'forum_id' => 2,
                'content' => 'python ku gk jalan',
                'created_by' => 2,
                'updated_by' => null
            ],
            [
                'forum_id' => 3,
                'content' => 'error assignrole spatie laravel 8',
                'created_by' => 2,
                'updated_by' => null
            ],
            [
                'forum_id' => 3,
                'content' => 'error prefix laravel 8',
                'created_by' => 3,
                'updated_by' => null
            ],

        ];
        foreach ($postingans as $postingan) {
            Postingan::create($postingan);
        }
    }
}
