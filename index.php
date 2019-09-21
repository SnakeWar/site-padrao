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

<nav class="navbar navbar-expand-lg fixed-top" id="menu">

    <div class="container-fluid">

        <a class="navbar-brand h1 mb-0" href="#">SnakeWar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">

            <ul class="navbar-nav mr-auto ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
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
                <button class="btn" id="botao">OK</button>

            </form>

        </div>

    </div>

</nav>

<section class="header-site">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <h1 class="text-center">Bem-Vindo</h1>

                <p class="lead text-center">Justo nec ultrices dui sapien. Lacus luctus accumsan tortor posuere.</p>

                <p class="text-center">
                    <a href="#" class="btn btn-danger">Cadastre-se</a>
                </p>

            </div>

        </div>

    </div>

</section>

<section class="middle-site">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <h1 class="text-center">Velit aliquet</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed risus ultricies tristique nulla aliquet. Odio pellentesque diam volutpat commodo sed. Adipiscing at in tellus integer feugiat scelerisque varius morbi. Ullamcorper sit amet risus nullam eget felis eget nunc.</p>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-4">

                <div class="img-thumbnail">

                    <img src="img/1.jpg" class="img-fluid imagem"/>

                    <div class="caption text-center">

                        <h3>Id neque aliquam</h3>

                        <p class="text-center">Augue lacus viverra vitae congue eu consequat ac felis donec.</p>

                    </div>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="img-thumbnail">

                    <img src="img/2.jpg" class="img-fluid imagem"/>

                    <div class="caption text-center">

                        <h3>Posuere lorem</h3>

                        <p class="text-center">Eget dolor morbi non arcu risus quis varius.</p>

                    </div>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="img-thumbnail">

                    <img src="img/3.jpg" class="img-fluid imagem"/>

                    <div class="caption text-center">

                        <h3>Enim blandit</h3>

                        <p class="text-center">Viverra accumsan in nisl nisi scelerisque eu ultrices. </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="mm-site">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <h1 class="text-center">Neque convallis</h1>

                <p class="lead text-center">Bibendum enim facilisis gravida neque convallis a cras.</p>

            </div>

        </div>

    </div>

</section>

<section class="footer-site">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <p class="text-center">Developed by SnakeWar</p>

            </div>

        </div>

    </div>

</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                $("#botao").addClass("btn-outline-light");
                $("#botao").removeClass("btn-outline-dark");
                $("#menu").addClass("navbar-dark");
                $("#menu").removeClass("navbar-light");
                $("#menu").addClass("bg-dark");
                $("#menu").removeClass("bg-light");
            } else {
                $("#botao").addClass("btn-outline-dark");
                $("#botao").removeClass("btn-outline-light");
                $("#menu").addClass("bg-light");
                $("#menu").removeClass("navbar-dark");
                $("#menu").addClass("navbar-light");
                $("#menu").removeClass("bg-dark");

            }
        });
    });
</script>
</body>
</html>