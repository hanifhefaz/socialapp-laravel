<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentController extends Controller
{
	protected $guarded = [];
    public function store(Request $request, $post)
    {
    	$this->validate($request,[
    		'body' => 'required'

    	]);

    	$comment = new Comment();
    	$comment -> user_id = auth()->user()->id;
    	$comment -> post_id = $post;
    	$comment -> body = $request->body;
    	$comment -> save();

    	return redirect('/posts');
    }
}
