<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>家事一覧</title>
    </head>
    <body>
 <h1 class="title">
            {{ $housework->title }}
        </h1>
        <div class="content">
            <div class="housework">
                <p>担当：{{ $housework->user_id}}</p>
                <p>曜日：{{$housework->weekday}}</p>
                
                <p>時間帯：{{$housework->time}}</p>
                
                <p>メモ：{{ $housework->memo }}</p>    
            </div>
        </div>
        
     　　　
        <form action="/home/{{ $housework->housework_id }}" id="form_delete" method="post" style="display:inline">
    　　　 @csrf
   　　　　 @method('DELETE')
         <button type="submit" onclick="return deleteHousework(this);">delete</button>
　　　　</form>

    
 
        <script>function deleteHousework(event){
            'use strict';
            if (confirm('本当に削除しますか？')){
          
            document.getElementById('form_delete').submit();
              
            }
        }
            
        </script>
        <div class="footer">
        <a href="/home">戻る</a>
            

    
</html>
@endsection