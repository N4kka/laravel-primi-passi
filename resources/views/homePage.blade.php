<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
        <a href=" {{ route('about') }} ">About Us</a>
        <a href=" {{ route('services') }} ">Services</a>
    </header>
    <main>
        <h1>Hello World! This is {{ $name }} home page</h1>
    </main>
</body>

</html>

@if ($isLoggedIn)
    <p>Sei correttamente loggato al sito.</p>
@else
    <p>Effettua il login al sito.</p>
@endif