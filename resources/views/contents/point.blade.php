<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    
    <body>
        <h1>これまでのポイント</h1>
        @foreach ((array)$users as $user)
        <h2 class='user'>{{$user->userid}}</h2>
        <p class='point'>{{$user->point}}</p>
    
        
        @endforeach
        
     <div class="back">[<a href="/home">back</a>]</div>
    </body>
</html>
