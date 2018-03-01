<title>Edit Article</title>

@extends('layouts.master')

@section('content')

	
	<div class="uk-section uk-section-large uk-section-secondary uk-padding-large uk-text-center">
        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s uk-align-center uk-margin-large-top">
    		<form method="POST" action="/posts/{{ $post->id }}/edit">

    			{{ csrf_field() }}

    			<fieldset class="uk-fieldset">

    				 <h4>Edit Post</h4>
    				  	<div class="uk-margin">
               	 			<input class="uk-input" id="title" type="text" placeholder="{{ $post->title }}" name="title" required>
            			</div>
            			<div class="uk-margin">
                			<textarea class="uk-textarea" id="body" rows="5" name="body" required>{{$post->body}}</textarea>
            			</div>
            			<div uk-form-custom="target: true">
                			<input type="file" name="photo" required>
                			<input class="uk-input uk-form-width-medium" type="text" placeholder="{{ $post->photo }}" disabled>
            			</div>
            			<div class="uk-margin">
            				<button class="uk-button uk-button-default" type="submit">Edit</button>
            			</div>

                        @include('layouts.errors')

    			</fieldset>
    		</form>
        </div>
	</div>
@endsection