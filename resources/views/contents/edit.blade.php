<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    
    <body>
        
    <h1　class='title'>家事の追加</h1>
    
    <form action="/home/homework" method="POST"></form>
     @csrf
     
    <div class='homework'>
         <h2>家事名を追加する</h2>
            <input type="text" name="homework"  placeholder="家事名を入力する" value="{{ old('post.title') }}"/>
    </div>
    
    <div class="memo">
       　　　<h2>メモ</h2>
         　　<textarea name="memo" placeholder="入力する" >{{ old('post.body') }}</textarea>
         
     </div> 
    
    </form>
    
    <input type="submit" value="保存"/>
    
     <div class="back">[<a href="/home">back</a>]</div>
    </body>
</html>
