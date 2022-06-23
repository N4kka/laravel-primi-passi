<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join</title>
</head>

<body>
    <header>
        <a href=" {{ route('home') }} ">Home Page</a>
        <a href=" {{ route('about') }} ">About us</a>
        <a href=" {{ route('services') }} ">Services</a>
    </header>

    @for ($i = 0; $i < 100; $i++)
        <ul>
            <li>{{ $i }}</li>
        </ul>
    @endfor
</body>

</html>
