@extends('layouts.master')


@section('content')

<div class="uk-section uk-section-large uk-section-primary height">
    <img src="{{asset('images/drive.png')}}" class="fix">
    <div uk-grid>
        <div class="uk-width-1-2">
            <div class="uk-container uk-margin-large-left uk-margin-large-top">
                <hr class="uk-divider-small">
                <p class="masterFont">THIS IS</p>
                <h1 class="masterFont uk-margin-remove-top letterspace">THE TAKEOVER</h1>
                <p class="masterFont">Latest news from your favorite sports. Get up to date with the latest trades, issues and schedules. Don't miss a beat!</p>
            </div>
        </div>  
    </div>
</div>

<div class="uk-section uk-section-default uk-section-large red">
    <div uk-grid>
        <div class="uk-width-1-2">
            <div class="uk-container uk-margin-large-left uk-flex-right">
                <hr class="uk-divider-small">
                <p class="heroWhite masterFont">READ UP</p>
                <h1 class="heroWhite masterFont letterspace">THE NEWS</h1>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-secondary uk-padding-large black">

    <div uk-grid>
        <div class="uk-width-1-1 uk-text-center">
            <p>January 2018</p>
            <h1 class="letterspace1 masterFont">A+ GRADE FOR ALL STAR GAME</h1>
            <p class="masterFont">Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <img src="{{asset('images/article1.jpg')}}" class="size"><br><br>
            <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
        </div>
    </div>

    <hr>

    <div uk-grid>
            <div class="uk-width-1-3 uk-text-center masterFont">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont uk-margin-remove-top">Chelsea Top Wigan</h3>
                <img src="{{asset('images/article2.jpg')}}" class="size">
                <p>Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
            </div>
            </div>
            <div class="uk-width-1-3 uk-text-center">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont uk-margin-remove-top">Sharapova Drug Test</h3>
                <img src="{{asset('images/article4.jpg')}}" class="size">
                <p class="masterFont">Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
            </div>
            </div>
            <div class="uk-width-1-3 uk-text-center">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont uk-margin-remove-top">Mourninho to be Fired?</h3>
                <img src="{{asset('images/article3.jpg')}}" class="size">
                <p class="masterFont">Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
            </div>
            </div>
    </div>

    <hr>

    <div uk-grid>
            <div class="uk-width-1-3 uk-text-center">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont heroWhite uk-margin-remove-top">The real GOAT</h3>
                <img src="{{asset('images/article7.jpg')}}" class="size">
                <p class="masterFont">Oldest number 1 tennis player. Record Breaking.</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
                </div>
            </div>
            <div class="uk-width-1-3 uk-text-center">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont uk-margin-remove-top">Westbrook/Durant Fued</h3>
                <img src="{{asset('images/article5.jpg')}}" class="size">
                <p class="masterFont">Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
                </div>
            </div>
             <div class="uk-width-1-3 uk-text-center">
                <div class="uk-card uk-card-default transparent uk-padding-small uk-border-rounded heroWhite">
                <p class="masterFont uk-margin-top">January 25, 2018</p>
                <h3 class="masterFont uk-margin-remove-top">Mourninho to be Fired?</h3>
                <img src="{{asset('images/article8.jpg')}}" class="size">
                <p class="masterFont">Excepteur sint occaecat cupidatat non
                proident,</p>
                <a class="uk-button uk-button-default masterFont" href="#">Full Story</a>
            </div>
            </div>
    </div>
   
   <hr>

       <ul class="uk-pagination uk-flex-center" uk-margin>
        <li><a href="#"><span uk-pagination-previous></span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span uk-pagination-next></span></a></li>
        </ul>
</div>

<div id="brand" class="uk-section uk-section-default red">
        <div class="uk-container uk-container-small">
            <div class="uk-margin-large-bottom uk-text-center">
                <h3 class="setPink uk-flex-middle">Powered by</h3>
                <hr class="uk-divider-small">
            </div>
            <div>
                <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large">
                        <li>
                            <img class="uk-flex-middle" src="{{asset('images/logo1.png')}}" alt="">   
                        </li>
                        <li>
                             <img src="{{asset('images/logo6.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo3.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo4.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo5.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo2.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo7.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo8.png')}}">
                        </li>
                        <li>
                            <img src="{{asset('images/logo9.png')}}">
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </div>

<div class="uk-section uk-section-muted uk-padding-large black">
    <div uk-grid>
        <div class="uk-width-1-3 heroWhite">
            <h1 class="heroWhite">Takeover</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div> 
        <div class="uk-width-1-3 heroWhite">
            <h1 class="heroWhite">Sports</h1>
            <p>Basketball</p>
            <p>Soccer</p>
            <p>Tennis</p>
        </div> 
        <div class="uk-width-1-3 heroWhite">
            <h1 class="heroWhite">Contact Us</h1>
            <p>fedriccorabaya@gmail.com</p>
            <p>09173073824</p>
            <p>3rd Floor Caswynn Building, No. 134 Timog Avenue, Sacred Heart, Quezon City, 1103 Metro Manila</p>
        </div>       
    </div>
    
</div>


@endsection




