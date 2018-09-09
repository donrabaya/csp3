<title>Create Article</title>

@extends('layouts.master')

@section('content')

	
	<div class="uk-section uk-section-large uk-section-secondary uk-padding-large uk-text-center">
        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s uk-align-center uk-margin-large-top">
		<form method="POST" action="/posts">

			{{ csrf_field() }}

			<fieldset class="uk-fieldset">

				    <h4>CREATE POST</h4>
				  	<div class="uk-margin">
           	 			<input class="uk-input" id="title" type="text" placeholder="Title" name="title" required>
        			</div>
        			<div class="uk-margin">
            			<textarea class="uk-textarea" id="body" rows="5" placeholder="Textarea" name="body" required></textarea>
        			</div>
        			<div uk-form-custom="target: true">
            			<input type="file" name="photo" required>
            			<input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-select">Category</label>
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-width-medium" id="form-horizontal-select" name="tag">
                                <option>Basketball</option>
                                <option>Soccer</option>
                                <option>Tennis</option>
                            </select>
                        </div>
                    </div>
        			<div class="uk-margin">
        				<button class="uk-button uk-button-default" type="submit">Publish</button>
        			</div>

                    @include('layouts.errors')
			</fieldset>
		</form>
        </div>
	</div>
@endsection
