<div class="uk-position-relative">

    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-large-left">
                <ul class="uk-navbar-nav">
                    <li><a href="/" class="heroWhite">The Takeover<img class="logosize uk-margin-small-left" src="{{asset('images/toplogo.png')}}"></a></li>
  {{--                   <li>
                        <a href="#" class="heroWhite">Basketball</a>
                    </li>
                    <li>
                        <a href="#" class="heroWhite">Soccer</a>
                    </li>
                    <li>
                        <a href="#" class="heroWhite">Tennis</a>
                    </li> --}}
                </ul>
            </div>
            <div class="uk-navbar-right uk-margin-large-right">
                <ul class="uk-navbar-nav">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}" class="heroWhite navsize">Login</a></li>
                        <li><a href="{{ route('register') }}" class="heroWhite navsize">Register</a></li>
                    @else
                        <li>
                            <a href="#" class="heroWhite">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="heroWhite">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>