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