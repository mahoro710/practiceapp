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
        
    <h1　class='title'>家事の追加</h1>
    
    <form action="/home/index" method="POST">
     @csrf
     
    <div class='housework'>
         <h2>家事名を追加する</h2>
            <input type="text" name="housework[title]"  placeholder="家事名を入力する" value="{{ old('housework.title') }}"/>
    </div>

    <div class="weekday">
            <h2>曜日を選択</h2>
            <select name='housework[weekday]'>
　　　　　	<option value="月曜日">月曜日</option>
　　　　	<option value="火曜日">火曜日</option>
　　　　	<option value="水曜日">水曜日</option>
　　　　	<option value="木曜日">木曜日</option>
　　　　	<option value="金曜日">金曜日</option>
　　　　	<option value="土曜日">土曜日</option>
　　　　	<option value="日曜日">日曜日</option>
            </select>
        </div>
    
    <div class="user">
    <h2>担当を選択</h2>
    <select name="housework[user_id]">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

    <div class="time">
            <h2>時間帯を選択</h2>
            <select name='housework[time]'>
　　　　　	<option value="朝">朝</option>
　　　　	<option value="昼">昼</option>
　　　　	<option value="夕方">夕方</option>
　　　　	<option value="寝る前">寝る前</option>
            </select>
        </div>
        

    
    
    <div class="memo">
       　　　<h2>メモ</h2>
         　　<textarea name="housework[memo]" placeholder="入力する" >{{ old('housework.body') }}</textarea>
         
     </div> 
    
    
    <input type="submit" value="保存"/>
    </form>
    
     <div class="back">[<a href="/home">back</a>]</div>
    
     
     
    
    
    </body>
</html>
@endsection