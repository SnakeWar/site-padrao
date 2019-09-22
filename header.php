<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light" id="menu">

    <div class="container-fluid">

        <a class="navbar-brand h1 mb-0" href="#">SnakeWar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">

            <ul class="navbar-nav mr-auto ml-auto">

                <li class="nav-item">
                    <a class="nav-link<?php echo $pagina == 'home' ? ' ativo' : ''?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $pagina == 'sobre' ? ' ativo' : ''?>" href="sobre.php">Sobre</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $pagina == 'portfolio' ? ' ativo' : ''?>" href="portfolio.php">Portfólio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $pagina == 'contato' ? ' ativo' : ''?>" href="contato.php">Contato</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        Social
                    </a>

                    <div class="dropdown-menu">

                        <a class="dropdown-item">Facebook</a>
                        <a class="dropdown-item">Twitter</a>
                        <a class="dropdown-item">Instagram</a>

                    </div>

                </li>

            </ul>

            <form class="form-inline">

                <input class="form-control ml-2 mr-2" type="search" placeholder="Buscar...">
                <button class="btn btn-outline-dark" id="botao">OK</button>

            </form>

        </div>

    </div>

</nav>