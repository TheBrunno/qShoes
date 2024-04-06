<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/home.css">
    <title>qShoes</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wdth,wght@0,62..125,100..900;1,62..125,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <div class="nav-container">
        <nav class="sup-nav">
            <div class="left-nav">
                <a href="/">qShoes</a>
            </div>
            <div class="search">
                <input type="text" id="search">
                <span class="material-symbols-outlined">
                    search
                </span>
            </div>
            <div class="right-nav">
                <?php
                    session_start();
                    try{
                        $email = $_SESSION["email"];
                        $name = $_SESSION["name"];
                        ?>
                        <ul>
                            <li id="account">
                                <a href="/account">
                                    <span class="material-symbols-outlined">account_circle</span>
                                    Olá, <?php echo $name ?>
                                </a>
                            </li>
                            <li>
                                <a href="/logout">Sair</a>
                            </li>
                        </ul>
                    <?php
                    }
                    catch(Exception $e){
                    ?>
                        <ul>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Cadastro</a></li>
                        </ul>
                    <?php
                        }
                    ?>
            </div>
        </nav>
    </div>
    <?php
        if($_SERVER['REQUEST_URI'] == '/'){
    ?>
        <nav class="sub-nav">
            <ul>
                <li>
                    <a href="/tenis">Esportivos</a>
                </li>
                <li>
                    <a href="/tenis">Sociais</a>
                </li>
                <li>
                    <a href="/tenis">Casuais</a>
                </li>
                <li>
                    <a href="/tenis">Streetwear</a>
                </li>
            </ul>
        </nav>
    <?php
        }
    ?>

@yield('content')

</body>
</html>