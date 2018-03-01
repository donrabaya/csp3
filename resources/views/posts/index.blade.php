<title>Home Page</title>

@extends('layouts.master')


@section('content')

<div class="uk-section uk-section-large uk-section-primary height">
    <div class="maincontainer">
    <img src="{{asset('images/drive.png')}}" class="fix">
    <div uk-grid>
        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
            <div class="uk-container uk-margin-small-left uk-margin-large-top">
                <hr class="uk-divider-small widthdiv">
                <p class="masterFont this">THIS IS</p>
                <h1 class="masterFont uk-margin-remove-top letterspace2">THE TAKEOVER</h1>
                <p class="masterFont masterpar">Latest news from your favorite sports. Get up to date with the latest trades, issues and schedules. Don't miss a beat!</p>
            </div>
        </div>  
    </div>
    </div>
</div>

<div class="uk-section uk-section-default uk-section-large red">
    <div class="maincontainer">
    <div uk-grid>
        <br>
        <br>
        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
            <div class="uk-container uk-flex-right newspos"  uk-scrollspy="cls: uk-animation-slide-bottom;">
                <h3 class="heroWhite box2 uk-padding-small">READ UP</h3>
                <h3 class="heroWhite masterFont letterspace small">THE NEWS</h3>
                <h1 class="absolute2 heroWhite masterFont">"Manchester City Stuns Arsenal FC to Win Title"</h1>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="uk-section uk-section-secondary uk-padding-large black">
    <div class="maincontainer">

    @foreach ($posts as $post)

        
    @endforeach

        @include('posts.post')

    </div>
    <br>
    <br>
    <div class="uk-margin-large-bottom">
        @if(Auth::user())
        
            @if(Auth::user()->type === 'admin')
                <div class="uk-text-left uk-margin-bottom">
                    <a class="uk-button uk-button-default" href="/posts/create">Create Post</a> 
                </div>
            @endif
      
        @endif

        <ul class="uk-padding-remove">
            @foreach($archives as $stats)
                <li>
                    <a href="/?month={{ $stats['month'] }}&year={{ $stats['year']}}">{{$stats['month'].' '.$stats['year'] }}</a>
                </li>
            @endforeach
        </ul>

        <div uk-grid>
            @foreach($posts as $post)
                    <div class="uk-width-1-3@l uk-width-1-2@m uk-width-1-1@s uk-text-center masterFont">
                        <div id="article-card" class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <div class="uk-card-badge uk-label">{{ $post->tag }}</div>
                                <img id="img" src="{{asset('images/'.$post->photo.'')}}" class="size">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                 <a href="/posts/{{ $post->id }}"><h3 class="masterFont uk-margin-small-top uk-text-left heroBlack">{{ $post->title }}</h3></a>
                                <p class="masterFont uk-margin-top uk-text-left">{{ $post->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>
                    </div>

            @endforeach        
        </div>
    </div>
</div>

<div id="brand" class="uk-section uk-section-default">
        <div class="uk-container uk-container-small">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo1.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo3.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo4.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo5.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo2.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo7.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo8.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo9.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo3.png')}}">
                        </div>
                        <div class="uk-width-1-5">
                            <img src="{{asset('images/logo5.png')}}">
                        </div>
                    </div>
        </div>
    </div>


@endsection



