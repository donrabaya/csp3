<title>Article - {{$post->title}}</title>

@extends('layouts.master')

@section('content')
	
	<div class="uk-section uk-section-large uk-section-secondary uk-padding-large uk-padding-left uk-text-left" id="left" uk-grid>
		<div class="containershow uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s uk-padding-small">

		<article class="uk-article uk-margin-medium-top">

	    <h1 class="uk-article-title"><img src="{{asset('images/'.$post->photo.'')}}" class="size"></h1>
	    	<p class="uk-article-meta">Written by <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toDayDateTimeString() }}. Posted in <a href="#" class="uk-margin-small-right">{{ $post->tag }}</a>

	    	@if(Auth::user())
	    		@if($post->user_id == Auth::user()->id)
					<a href='{{url("posts/$post->id/edit")}}'><button class="uk-button uk-button-default uk-button-small">Edit Post</button></a>
					<a><button class="uk-button uk-button-default uk-button-small" href="#modal-delete-post" uk-toggle>Delete Post</button></a>
				@endif
	    	@endif
		</p>	
	    <h2>{{ $post->title }}</h2>

	    <p class="uk-dropcap">{!! nl2br(e($post->body))!!}</p>
	  
	    <br>

	    <div class="uk-grid-small uk-child-width-auto" uk-grid>
	        <div>
	            <h3>Comments</h3>
	        </div>
	    </div>
		{{-- Modal Delete --}}
		<div id="modal-delete-post" class="uk-flex-top" uk-modal>
			<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center">
				<p>Are you sure you want to delete your post?</p>
				<button class="uk-modal-close-default" type="button" uk-close></button>
				<a href='{{url("posts/$post->id/delete")}}'><button class="uk-button uk-button-default uk-button-small">Yes</button></a>
				
			</div>
		</div>

		
	    <br>

		<div class="comments">
			<ul class="uk-margin-remove-left uk-padding-remove">
				@foreach($post->comments as $comment)
					<article class="uk-comment border uk-padding-small uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">
					    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
					        <div class="uk-width-expand">
					            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">By {{ $comment->user->name }}</a></h4>
					            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
					                <li><a href="#">{{ $comment->created_at->diffForHumans()}}</a></li>
					                @if(Auth::user())
										@if($comment->user_id == Auth::user()->id)
					                		<li><a href='{{url("posts/comment/$comment->id/edit")}}'><button class="uk-button uk-button-default uk-button-small" href="#modal-center" uk-toggle>Edit</button></a></li>
					                		<li><a><button class="uk-button uk-button-default uk-button-small" href="#modal-delete" uk-toggle>Delete</button></a></li>

			                				{{-- Modal Edit --}}
											<div id="modal-center" class="uk-flex-top" uk-modal>
									    		<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center">
									        		<button class="uk-modal-close-default" type="button" uk-close></button>
									        		<form method="POST" action="/posts/comment/{{ $comment->id }}/edit">
												         {{ csrf_field() }}
												         <p>Edit your comment here</p>
												        <input type="text" class="uk-input uk-form-width-medium" name="editcomment" value="{{$comment->body}}">
												        <br>
												        <br>
												        <button type="submite" class="uk-button uk-button-default uk-button-small">Submit</button>
												    </form>
									    		</div>
																				</div>
											{{-- Modal Delete --}}
											<div id="modal-delete" class="uk-flex-top" uk-modal>
												<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center">
													<p>Are you sure you want to delete your comment?</p>
													<button class="uk-modal-close-default" type="button" uk-close></button>
													<a href="{{url("posts/comment/$comment->id/delete")}}"><button class="uk-button uk-button-default uk-button-small">Yes</button></a>
													
												</div>
											</div>
					                	@endif
					        		@endif
					            </ul>
					        </div>
					    </header>
					    <div class="uk-comment-body uk-margin-remove">
					        <p>{{ $comment->body }}</p>
					    </div>
					</article>
					<br>
				@endforeach
			</ul>
		</div>

		@unless (Auth::check())
			<p>Register <a href="/register">here</a> to post a comment.</p>
		@endunless

		

		@if(Auth::user())
			<form method="POST" action="/post/{{ $post->id }}/comments">
				{{ csrf_field() }}
				<div class="uk-margin">
					<h3>Leave a Comment</h3>
					<input class="uk-textarea uk-form-width-large" rows="2" name="body" placeholder="Your comment here" required>
					</input>
				</div>
				<div>
					<button class="uk-button uk-button-default uk-button-small">Add Comment</button>
				</div>
			</form>
		@endif

		</article>
		</div>

		{{-- Twitter --}}
		<div class="uk-width-1-3@l uk-width-1-1@m uk-width-1-1@s containershow uk-padding">
			<a class="twitter-timeline" data-height="260vh" data-theme="dark" data-link-color="#19CF86" href="https://twitter.com/espn?ref_src=twsrc%5Etfw">Tweets by espn</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>	

	</div>


@endsection