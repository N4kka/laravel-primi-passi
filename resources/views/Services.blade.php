<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
</head>
<body>
    <header>
        <a href=" {{ route('home') }} ">Home Page</a>
        <a href=" {{ route('about') }} ">About us</a>
        <a href=" {{ route('join') }} ">Join Us</a>
    </header>
    <main></main>
</body>
</html>

@foreach ($services as $item)
    {{-- Print the services list --}}
    <li>
        {{ $item['name'] }}
        @if ($loop->first)
            ->first element
        @endif
    </li>
    <p> {{ $item['duration'] }} </p>
@endforeach