<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  $blogs = [
            ['title' => 'test', 'content' => ' blogblogblogblogblogblogblog'],
            ['title' => 'test', 'content' => ' blogblogblogblogblogblogblog'],
            ['title' => 'test', 'content' => ' blogblogblogblogblogblogblog'],
            ['title' => 'test', 'content' => ' blogblogblogblogblogblogblog'],
        ];
           DB::table('blogs')->insert($blogs);

    }
}
