<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
    </head>
    
    
    <body>
        <h1>ToDo</h1>
        <div class='contents'>
            <div class='content'>
                <a class='record' href='/home/record'>今日の記録</a>
                <a class='edit' href='/home/edit'>家事の追加</a>
                <a class='point' href='/home/point'>ポイント記録</a>
                <a class='calender' href='/home/calender'>カレンダー</a>
                
                　
            </div>
        </div>
    
    </body>
    
    
</html>