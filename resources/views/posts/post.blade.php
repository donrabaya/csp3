<div uk-grid>
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s uk-text-center">
    	<div class="relative">
	        <p>{{ $post->created_at->toFormattedDateString() }}</p>
	        <a href="/posts/{{ $post->id }}">
	       		<h2 class="masterFont pos uk-width-2-3@l uk-width-1-3@s uk-text-left uk-padding-small">{{ $post->title }}</h2>        	
	        </a>
	       
	        <img src="{{asset('images/'.$post->photo.'')}}" class="size"><br><br>
	        <a class="uk-button uk-button-default masterFont" href="/posts/{{ $post->id }}">Full Story</a>
    	</div>
    </div>
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s padding" uk-scrollspy="cls: uk-animation-slide-bottom;">	
    	<div class="color uk-margin-large-top uk-padding-small uk-padding-left">
    		<h3 class="box uk-padding-small">Note Worthy</h3>
    		<h3 class="uk-margin-large-top uk-width-2-3@l uk-width-1-1@s head">Stephen A. Smith</h3>
    		<h1 class="absolute heroWhite masterFont">"Lebron James should not be happy about best 16 format"</h1>
    	</div>
    </div>
</div>