<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Blog;
use App\Model\Reply;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class , 5)->create();
        // factory(Blog::class , 5)->create();
        factory(Reply::class , 10)->create();
    }
}
