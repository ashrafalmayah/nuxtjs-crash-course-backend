<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(10)->create();

        User::find(1)->update([
            'name' => 'ashraf',
            'email' => 'ashraf@gmail.com',
            'password' => '1234'
        ]);
    }
}
