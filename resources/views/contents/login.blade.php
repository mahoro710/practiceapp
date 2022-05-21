<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    <body>
        <div class=login>
            
        <h1> HELLO </h1>
        <P class='emailadress'>enter your email adress</P>
        <input type="email" id="emailadress" name="adress" required
       minlength="4" maxlength="60" size="10">

        <p class='userid'>enter userid</p>
        <p class='familypasscord'>enter family passcord</p>
        
        <input type="submit" value="login"/>
        </div>
       
    </body>
</html