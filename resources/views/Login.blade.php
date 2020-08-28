<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>customerX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/global.css">

    </head>
    <body>

        <h1>customerX</h1>
    
        <form id="register">
            <h3>Login</h3>
            @csrf
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password">

            <button id="loginbtn" type="submit">entrar</button>
        </form>
        
    </body>
</html>
