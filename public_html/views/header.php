<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MT</title>

    <link rel="stylesheet" href="/views/css.css">
</head>

    <!-- JQUERY DESPLEGABLE-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul li:has(ul)').hover(function (e) {
                $(this).find('ul').css({ display: "block" });
            },
                function (e) {
                    $(this).find('ul').css({ display: "none" });
                });
        });
    </script>
    <!------------------------------------------------------------------------------------------------------------->

    <header id="main-header">

        <a id="logo-header" href="descarga.png">
            <span class="site-name">MouseTecnhologies</span>
            <span class="site-desc"> </span>
        </a> <!-- / #logo-header -->

        <nav>
            <ul class="desplegable">
                <li>
                    <a href="/../index.php?accio=mostrar-registro">Login</a>
                    <ul>
                        <li><a href="">Mi cuenta</a></li>
                        <li><a href="">Mis compras</a></li>
                        <li><a href="">Cerrar sesión</a></li>

                    </ul>
                </li>
                <li><a href="#">Carrito</a></li>

            </ul>
        </nav><!-- / nav -->

    </header><!-- / #main-header -->

</html>
