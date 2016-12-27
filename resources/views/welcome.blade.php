<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @foreach($users as $user)
            <li class="{{$loop->first ? 'first': ''}}">{{ $user->name }}</li>
        @endforeach

        @foreach($users as $user)
            {{ $user->name }}{{$loop->remaining ? ',' : '' }}
        @endforeach
    </body>
</html>
