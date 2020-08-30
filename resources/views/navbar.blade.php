<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Style -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/navbar.css">

    </head>
    <body>

        <header>
            
            <a href="/"><img id="logo" src="../img/logo-branco.png" alt="logo CustomerX"></a>
            <ul>
                <li><a id="add-customer" href="/customer">Clientes</a></li>
                <li><a id="add-contact" href="/contact">Contatos</a></li>
                <li><a id="report" href="/report">Relatório</a></li>
                <li><a id="logout" href="/login">Logout</a></li>
            </ul>

        </header>

        <main> @yield('main') </main>

        <footer>

            <p>&copy Paula Nogueira Guedes</p>
            <a href="https://wa.me/5511994788188">
                <img src="../img/whatsapp-icon.png" alt="Whatsapp">
            </a>
            <a href="https://www.linkedin.com/in/paulanguedes/">
                <img src="../img/linkedin-icon.png" alt="LinkedIn">
            </a>
            <a href="https://github.com/paulanguedes">
                <img src="../img/github-icon.png" alt="GitHub">
            </a>

        </footer>
        
    </body>
</html>
