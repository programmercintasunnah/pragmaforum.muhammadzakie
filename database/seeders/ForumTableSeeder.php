<?php

namespace Database\Seeders;

use App\Models\Forum;
use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $forums = [
            [
                'parent_id' => 1,
                'type' => 1,
                'title' => 'laravel',
                'content' => 'bblablaeaaa',
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'parent_id' => 1,
                'type' => 1,
                'title' => 'ci',
                'content' => 'hehehehe',
                'created_by' => 1,
                'updated_by' => null
            ],

        ];
        foreach ($forums as $forum) {
            Forum::create($forum);
        }
    }
}
