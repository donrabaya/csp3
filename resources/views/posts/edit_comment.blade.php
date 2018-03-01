<div class="uk-section uk-section-large uk-section-primary">
	
	   <form method="POST" action="/posts/comment/{{ $comment->id }}/edit">
         {{ csrf_field() }}
        <input type="text" name="editcomment" value="{{$comment->body}}">
        <input type="submit" name="submit">
    </form>

</div>