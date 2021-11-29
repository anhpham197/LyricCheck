<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lyric Check</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CKEditor -->
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Logo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=MuseoModerno:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="h-screen antialiased leading-none font-sans" style="background: #181A1B">
    <div id="app">
        <header class="py-5 mb-7" style="border-bottom: 1px solid #4f4f4f">
           <div class="text-center logo pb-3">Logo</div>
           <nav class="space-x-4 text-sm sm:text-base text-center">
            @guest
                {{-- <a class="hover:font-bold hover:no-underline hover:text-gray-300 uppercase text-gray-300" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                {{-- @if (Route::has('register'))
                    <a class="hover:font-bold hover:no-underline hover:text-gray-300 uppercase text-gray-300" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif --}}
            @else
                <span class="text-gray-300 font-medium">{{ Auth::user()->name }}</span>
                {{-- <i class="fas fa-sign-out-alt"></i> --}}
                <a href="{{ route('logout') }}"
                   class="hover:font-bold hover:no-underline hover:text-gray-300 uppercase text-gray-300 fas fa-sign-out-alt text-lg"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </nav>
        </header>

        @yield('content')

    </div>
</body>
</html>
