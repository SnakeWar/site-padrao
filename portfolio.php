<?php

$pagina="portfolio";

include ('header.php');

?>

<section class="portfolio">

    <hr class="hr-port">
    <h1 class="font-weight-bold text-dark text-center pb-5">Portfólio</h1>

<div class="carousel slide" id="carouselSite" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1" class=""></li>
        <li data-target="#carouselSite" data-slide-to="2" class=""></li>
    </ol>

    <div class="carousel-inner container-fluid">
        
        <div class="carousel-item active">
            
            <img src="img/1.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Tortor aliquam nulla</h3>
                <p>Morbi enim nunc faucibus a pellentesque. Neque ornare aenean euismod elementum nisi. </p>
            </div>
            
        </div>

        <div class="carousel-item">

            <img src="img/2.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Aliquam nulla tortor</h3>
                <p>Morbi enim nunc faucibus a pellentesque. Neque ornare aenean euismod elementum nisi. </p>
            </div>

        </div>

        <div class="carousel-item">

            <img src="img/3.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Nulla aliquam tortor</h3>
                <p>Morbi enim nunc faucibus a pellentesque. Neque ornare aenean euismod elementum nisi. </p>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Proximo</span>
        </a>

    </div>

</div>

</div>

</section>

<?php

include ('footer.php');

?>
