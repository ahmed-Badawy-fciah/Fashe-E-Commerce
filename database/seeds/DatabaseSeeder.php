<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class , 5)->create();
        factory(Blog::class , 5)->create();
    }
}
