<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
　　　　<link rel="stylesheet" href="calendar.CSS">
　　　　<script src="{{ asset('/js/calendar.js') }}"></script>
        <title>家事分担</title>
       
    <div class="home">
       
     　 <input name="date" type="date" />
        <h1 id="header">カレンダー</h1>

     　 
 
        <div id="next-prev-button">
            <button id="prev" onclick="prev()">‹</button>
            <button id="next" onclick="next()">›</button>
        </div>
    　　　
    　
        <div id="calendar">
             <input id="target">
            <input name="date" type="date" />
            
 
　　　　　　　
        </div>
    </div>　

@endsection