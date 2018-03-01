<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Type;
use App\User;
use Carbon\Carbon;

class PostsController extends Controller
{   
	public function index()
	{

        $posts = Post::latest();

        if($month = request('month')) {

            $posts->whereMonth('created_at', Carbon::parse($month)->month);
            
        }

        if($year = request('year')) {

            $posts->whereYear('created_at', $year);

        }

        $posts = $posts->get();

        $users = User::latest();

		$archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

		return view('posts/index', compact('posts','users', 'archives'));
	}
    public function show ($id) 
    {	
    	$post = Post::find($id);

    	return view('posts/show', compact('post'));
    }
    public function store () 
    {
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    	]);

       	$post = new Post;
    	$post->title = request('title');
    	$post->body = request('body');
        $post->photo = request('photo');
    	$post->tag = request('tag');
    	$post->user_id = auth()->id();

    	$post->save();

        session()->flash('message', 'Your Post is now up!');

    	return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts/edit', compact('post'));
    }

    public function delete($id) {

        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }

    
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post_obj = Post::find($id);
        $post_obj->title = $request->input('title');
        $post_obj->body = $request->input('body');
        $post_obj->photo = $request->input('photo');
        $post_obj->save();
        
        return redirect('/');
    }
}
