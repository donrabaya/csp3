<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('images/toplogo.png')}}">

    <!-- Custom Stylesheet -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>

    {{-- UIkit CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/uikit.min.css') }}"/>

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- uikit JS -->
    <script type="text/javascript" src="{{ asset('js/uikit.min.js') }}"></script>

    {{-- Laravel CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/css/uikit.min.css" />

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
 </head>
<body>

    
    @include('layouts.nav') 

    @if($flash = session('message'))

    <div class="uk-alert-success hello" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ $flash }}</p>
    </div>
    
    @endif

    @yield('content')

    @include('layouts.footer')


    
    <!-- UIkit JS -->
    <script type="text/javascript" src="{{ asset('js/uikit-icons.min.js') }}"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
