<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CustomerX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/global.css">

    </head>
    <body>

        <h1>CustomerX</h1>
    
        <a id="add-customer" href="/add-customer">Cadastrar cliente</a>
        <a id="add-contact" href="/add-contact">Novo contato</a>
        <a id="report" href="/report">Relatório</a>
        
    </body>
</html>
