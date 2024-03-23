<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>qShoes</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wdth,wght@0,62..125,100..900;1,62..125,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <div class="left-nav">
            <a href="/index">qShoes</a>
        </div>
        <div class="right-nav">
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Cadastro</a></li>
            </ul>
        </div>
    </nav>

@yield('content')

</body>
</html>