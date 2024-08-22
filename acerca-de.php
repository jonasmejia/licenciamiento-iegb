<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de redes - IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>

</head>

<style>
    .coo1 {
        border-radius: 89% 11% 64% 36% / 33% 26% 74% 67%;
        top: 450px;
        right: 130px;
        position: absolute;
        width: 330px;
        height: 280px;
        background-image: url(assets/img/escudo-iegb.webp);
    }

    .coo2 {
        border-radius: 4% 96% 2% 98% / 94% 11% 89% 6%;
        top: 49em;
        left: 140px;
        position: absolute;
        width: 450px;
        height: 550px;
        background-image: url(assets/img/index/fondo-estadistica.jpg);
    }

    .columna {
        width: 600px;
        height: 550px;
        background: #003366;
        margin-top: 1em;
        padding: 2em;
        position: relative;
        right: -34em;
        color: #DBEDF2;
    }
</style>

<body>

    <!--header-->
    <?php include_once("include/header.php"); ?>

    <!--contenido-->
    <main>
        <!--titulo del programa-->
        <section class="container-fluid" style=" background-color:#DBEDF2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="padding: 50px 0px 10px 0">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Acerca De: Nuestra Institución</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> </a></li>
                                <li class="breadcrumb-item">Nosotros</li>
                                <li class="breadcrumb-item active" aria-current="page">Acerca De</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="row col-md-8 justify-content-center">
                <div class=" md-8 justify-content-center  ">
                    <h1>Presentacion</h1>
                    <p>En el mundo actual, estamos siendo testigos de profundos cambios que afectan las estructuras
                        sociales y económicas. La globalización, la sociedad de la información y del conocimiento,
                        junto con los fenómenos económicos y sociales, se caracterizan por la rapidez en las comunicaciones y
                        el vertiginoso avance científico y tecnológico. En este contexto, la Educación Superior Tecnológica
                        enfrenta el desafío de no solo satisfacer las demandas del sector productivo, sino también formar
                        profesionales capaces de adaptarse a la velocidad de los cambios tecnológicos. Es crucial garantizar
                        una mayor movilidad y adaptabilidad profesional a lo largo de su vida laboral. La formación que brindamos
                        no debe limitarse a desarrollar capacidades terminales en una carrera profesional. Debemos también fomentar la
                        innovación, el emprendimiento empresarial y las actitudes personales que faciliten la empleabilidad continua de
                        nuestros egresados.</p>
                </div>
                <div class="cool col-md-8  ">
                    <div class="coo1"></div>
                </div>

            </div>
            <div class="row col-md-6 justify-content-center">
                <div class="cool col-md-8  ">
                    <div class="coo2"></div>
                </div>

                <div class=" row columna my-8">
                    <h1>Presentacion</h1>
                    <p>En el mundo actual, estamos siendo testigos de profundos cambios que afectan las estructuras
                        sociales y económicas. La globalización, la sociedad de la información y del conocimiento,
                        junto con los fenómenos económicos y sociales, se caracterizan por la rapidez en las comunicaciones y
                        el vertiginoso avance científico y tecnológico. En este contexto, la Educación Superior Tecnológica
                        enfrenta el desafío de no solo satisfacer las demandas del sector productivo, sino también formar
                        profesionales capaces de adaptarse a la velocidad de los cambios tecnológicos. Es crucial garantizar
                        una mayor movilidad y adaptabilidad profesional a lo largo de su vida laboral. La formación que brindamos
                        no debe limitarse a desarrollar capacidades terminales en una carrera profesional. Debemos también fomentar la
                        innovación, el emprendimiento empresarial y las actitudes personales que faciliten la empleabilidad continua de
                        nuestros egresados.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include_once("include/footer.php"); ?>

    <?php include_once("include/js.php"); ?>

    <script>
        $(window).on('load', function() {
            // Oculta la pantalla de carga con un efecto de desvanecimiento
            $('#loading-screen').fadeOut('slow');
        });
    </script>
</body>

</html>
