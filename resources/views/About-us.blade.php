<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>

<body>
    <header>
        <a href=" {{ route('home') }} ">Home Page</a>
        <a href=" {{ route('services') }} ">Services</a>
        <a href=" {{ route('join') }} ">Join Us</a>
    </header>
    <main>
        <h1>This is the about us page </h1>
    </main>

    @foreach ($contact as $item)
        <h1> {{ $item['name'] }} </h1>
    @endforeach

</body>

</html>
