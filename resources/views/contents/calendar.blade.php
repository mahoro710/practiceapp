<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
　　　　<link rel="stylesheet" href="calendar.CSS">
　　　　<script src="{{ asset('/js/calendar.js') }}"></script>
        <title>Laravel</title>
       
    <div class="home">
    
        <h1 id="header">カレンダー</h1>

     
        <div id="next-prev-button">
            <button id="prev" onclick="prev()">‹</button>
            <button id="next" onclick="next()">›</button>
        </div>

   
        <div id="calendar">
            
        </div>
    </div>

@endsection