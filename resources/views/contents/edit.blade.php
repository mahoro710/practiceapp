<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

<body>
    
<form action="/edit" method="POST">
                 @csrf
      家事の追加<br>
      <input type="text" name="edit" placeholder="例：お風呂掃除"/><br>
    
  　　 <div class="user"> 
     　 <p> 担当する人</p> 
      　
   　</div>
    
   　<div class="days">
     　 <p>担当曜日</p>
      　
   　</div>
    
   
  　<div class="memo">
    　<p>メモ</p>
    　<textarea name="remarks" placeholder="例：月曜日は特にしっかりやる"></textarea><br>
   </div>
   
   <input type="submit" value="実行"/>
   
</form>

 　<div class="back">[<a href="/home">back</a>]</div>
 
</body>
</html>
