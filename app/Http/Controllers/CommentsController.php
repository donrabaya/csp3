<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {	
    	$this->validate(request(), ['body' => 'required|min:2']);

    	$comment = new Comment;
    	$comment->body = request('body');
 		$comment->post_id = $post->id;
 		$comment->user_id = auth()->id();

 		$comment->save();

    	return back();
    }
    function edit($id){
    	$comment = Comment::find($id);

    	return view('/posts/edit_comment', compact('comment')); 
    }
    function update(Request $request, $id){
    	$post = Post::find($id);

    	$comment = Comment::find($id);
    	$comment->body = $request->editcomment;
    	$comment->save();
    	return back();
    }
    function delete($id){
    	$comment = Comment::find($id);
    	$comment->delete();
    	 return back();
    }
}
