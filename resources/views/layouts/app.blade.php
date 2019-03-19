<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
        <nav class='z-depth-0 white'>
            <div class="nav-wrapper">
                <div class="container">
                    <a class="brand-logo" href="{{ url('/') }}"><img src="/img/logo2.png" class="responsive-img" width="100px" alt=""></a>
                    <a href="#!" class="sidenav-trigger right" data-target="mobile"><i class="material-icons grey-text">menu</i></a>
                    <ul class="hide-on-med-and-down right">
                        
                        <li><a href="{{ url('/') }}" class="grey-text">{!! trans('welcome.index') !!}</a></li>
                        <li><a href="{{ route('blog') }}" class="grey-text">{!! trans('welcome.blog') !!}</a></li>
                        @auth
                            <li><a class="grey-text dropdown-button" href="#!" data-target="dropdown1" >{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        @endauth
                        <li><a href="{{ route('home') }}" class="grey-text">En</a></li>
                        <li><a href="{{ route('es') }}" class="grey-text">Es</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ route('users.index') }}" class="grey-text">{!! trans('welcome.users') !!}<i class="material-icons right">person</i></a></li>
        <li><a href="{{ route('tags.index') }}" class="grey-text">{!! trans('welcome.tags') !!}<i class="material-icons right">filter_list</i></a></li>
        <li><a href="{{ route('categories.index') }}" class="grey-text">{!! trans('welcome.cat') !!}<i class="material-icons right">class</i></a></li>
        <li><a href="{{ route('posts.index') }}" class="grey-text">{!! trans('welcome.posts') !!}<i class="material-icons right">art_track</i></a></li>
        <li><a href="{{ route('messages.index') }}" class="grey-text">{!! trans('welcome.messages') !!}<i class="material-icons right">email</i></a></li>
        <li><a href="{{ route('works.index') }}" class="grey-text">{!! trans('welcome.works') !!}<i class="material-icons right">photo</i></a></li>
        <li><a href="{{ route('category-works.index') }}" class="grey-text">{!! trans('welcome.cat-works') !!}<i class="material-icons right">photo</i></a></li>
        <li class="divider"></li>
        <li>
            <a class="red-text" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{!! trans('welcome.logout') !!}<i class="material-icons right">close</i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
    </ul>

    <ul id="mobile" class="sidenav">
        <li><a href="{{ route('home') }}" class="grey-text">{{ trans('welcome.index') }}</a></li>
        <li><a href="{{ route('blog') }}" class="grey-text">{!! trans('welcome.blog') !!}</a></li>
        <li><a href="{{ route('es') }}" class="grey-text">Es</a></li>
    </ul>
    
    @if(count($errors))
        <div class="container">
            <div class="red center section">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="red-text text-darken-4">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if(session('info'))
        <div class="container">
            <div class="green center section">
                <p class="green-text text-darken-4">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    @yield('content')

    <footer class="page-footer overflow black">
        <div class="container">
            <div class="center">
                <div class="row">
                    <div class="col m4 offset-m4 s12">
                        <img src="/img/logo.png" class="responsive-img" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
