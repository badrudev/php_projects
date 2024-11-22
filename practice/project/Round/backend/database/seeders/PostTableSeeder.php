<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('posts')->insert([
            'title' => 'test',
            'body' => 'description',
            'is_publish'=>1
        ]); */
        Post::factory()->count(5)->create();
    }
}
