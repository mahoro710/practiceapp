@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>家事分担</title>
        
    </head>
    
    
    <body>
        <h1>ToDo</h1>
        <div class='contents'>
            <div class='content'>
                
                <p><a class='edit' href='/home/edit'>家事の追加</a></p>
        
                <p><a class='calendar' href='/home/calendar'>カレンダー</a></p>
             　 <p><a class='index' href='/home/index'>家事一覧</a></P>
             　 
            　  
                　
            </div>
        </div>
    
    </body>
    
    
</html>
@endsection