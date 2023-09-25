<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->pluck('id');
        $posts = DB::table('posts')->pluck('id');

        foreach ($posts as $post) {
            foreach ($users as $user) {
                DB::table('comments')->insert([
                    'user_id' => $user,
                    'post_id' => $post,
                    'content' => Str::random(100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
