<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="css.app"> // DEZE DOET HET NIET. FIX HET --}}
    <title>bobo</title>
</head>

<body>

    <header>
        <x-nav/>
    </header>

    @auth

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

<h1>Welkom , {{ Auth::user()->name}} !</h1>

    {{ $slot }}


    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="route('logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>

    @else
        <h1>please log in !</h1>
    <a href="{{ route('dashboard') }}">log in</a>
    @endauth
</body>
</html>
