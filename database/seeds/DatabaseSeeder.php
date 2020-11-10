<?php

use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Akash Grover',
            'email' => 'akash.grover@ditstek.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => 'O6ghpJhnMjUzUmoPx64ECRxKvm3i62BVfcUS7nSUGrPlFEDVeSq7P5GRBRKk'
        ]);

        Post::create([
            'title' => 'Hello World',
            'slug' => 'hello-world',
            'content' => '<p><strong>Hello World</strong></p>',
            'author_id' => $user->id
        ]);

        Page::create([
            'title' => 'About',
            'slug' => 'about',
            'content' => '<p>About Us</p>',
        ]);

        Menu::insert([
            [
                'name' => 'Home',
                'url' => '/',
                'order' => '1',
            ],
            [
                'name' => 'About Us',
                'url' => '/about',
                'order' => '1',
            ]
        ]);
    }
}
