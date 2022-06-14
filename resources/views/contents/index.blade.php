<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    
    <body>
        <h1>家事一覧</h1>
     
       <div class='houseworks'>
            @foreach ($houseworks as $housework)
                <div class='housework'>
                <h2 class='title'><a href="/home/{{ $housework->housework_id }}">{{ $housework->title }}</a><h2>
                    <p class='memo'>{{ $housework->memo }}</p>
                    <p class="user">{{$housework->user_id}}</p>
                    <p>{{$housework->weekday}}</p>
                    <P>{{$housework->time}}</P>
                </div>
            @endforeach
        </div>
        
      
        [<a href='/home/edit'>create </a>]
        
        
    </body>
    
</html>
@endsection

