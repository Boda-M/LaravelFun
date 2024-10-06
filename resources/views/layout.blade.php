<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI eszközök listája</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
</head>
<body>
    <header>
        <img src="{{asset('logo.png')}}" alt="logo">
        <nav>
            <ul>
                <li><a href="{{route('aitools.index')}}">AI eszközök</a></li>
                <li><a href="{{route('categories.index')}}">Kategóriák</a></li>
                <li><a href="{{route('categories.create')}}">Új kategória</a></li>
                <li><a href="{{route('tags.create')}}">Új címke</a></li>
                @if( auth()->check())
                <li>
                    <form action={{route('logout')}} method="post">
                        @csrf
                        <button type="submit">Kijelentkezés {{auth()->user()->name}}</button>
                    </form>
                </li>
                @else
                    <li><a href="{{route('login')}}">Belépés</a></li>
                @endif
            </ul>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer><p>&copy 2024</p></footer>
</body>
</html>