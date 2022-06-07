<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

 <h1 class="title">
            {{ $housework->title }}
        </h1>
        <div class="content">
            <div class="housework">
                <h3>家事</h3>
                <p>{{ $housework->memo }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/home">戻る</a>

    </head>
    <body>
  
    </body>
</html>
@endsection