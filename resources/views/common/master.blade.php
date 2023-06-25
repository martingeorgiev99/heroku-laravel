<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <style>
        body {
            margin: 5px;
            display: flex;
            flex-direction: column;
            background-color: black;
        }
        nav {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-color: black;
        }
        nav a{
            padding: 5px;
            margin: 5px;
            background-color: white;
            color: black;
            font-size: 2.5rem;
            vertical-align: center;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 40vh;
        }
    </style>
    @yield('style')
</head>
<body>

<nav>
    <a href="{{ route('foos.index') }}">Foos</a>
    <a href="{{ route('foos.create') }}">Create New Foo</a>
</nav>

@yield('content')
</body>
</html>

