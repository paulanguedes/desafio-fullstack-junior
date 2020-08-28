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
    
        <form id="register" method="post" action="{{ route('addUser') }}">
            <p>Preencha os seus dados para fazer o cadastro e ter acesso ao sistema.</p>
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password">

            <button type="submit">cadastrar</button>

            <p>Já tem cadastro? <a href="/login">Clique aqui.</a> </p>
        </form>
        
    </body>
</html>
