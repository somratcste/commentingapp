<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{

    public function index()
    {
        return \Response::json(Comment::get());
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
//        Comment::create(array(
//            'author' => Input::get('author'),
//            'text' => Input::get('text')
//        ));

        $comment = new Comment();
        $comment->author = $request->input('author');
        $comment->text = $request->input('text');
        $comment->save();

        return \Response::json(array('success' => true));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Comment::destroy($id);

        return \Response::json(array('success' => true));
    }
}
