<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAG</title>
    <!---PLugins css-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!---PLugins js-->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/543c7e7f83.js" crossorigin="anonymous"></script>
</head>

<body>
    <!---logotipo-->
    <div class="cointainer-fluid">
    </div>
    <h3 class="text-center py-3">LOGO 4A</h3>
    <!---Barra de menu-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class=" nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "ingreso") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "inicio") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "salir") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else : ?>
                    <!-- GET: $_GET["variable"]  varaiables que se pasan como parametros via UrL
                    Tmbnn conocido como cadena de consulta a taraves de la Url
                    cuando es la priemera variable se sepra con ?
                    las que le siguen a continuacion con la &-->

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                    </li>

                <?php endif ?>
            </ul>
        </div>
    </div>
    <!---contenido-->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            // isset() determina si una variable está definida y no es null
            if (isset($_GET["pagina"])) {
                // Lista de páginas permitidas en tu sitio web
                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "editar" ||
                    $_GET["pagina"] == "salir"
                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                     include "paginas/error404.php";
                }
            } else {
                include "paginas/registro.php";
            }
            ?>

        </div>
    </div>
</body>

</html>