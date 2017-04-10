<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
            'author' => 'Nazmul Hossain',
            'text' => 'I am an engineear.'
        ));

        Comment::create(array(
            'author' => 'Salma Akter',
            'text' => 'He is a good  boy.'
        ));

        Comment::create(array(
            'author' => 'G.M. Nazmul Hossain',
            'text' => 'I am a developer of Laravel and Angular.'
        ));
    }

}
