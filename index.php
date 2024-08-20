
<?php $menu="home"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php") ?>

    <?php include_once("include/css.php"); ?>
</head>
<style>

</style>

<body>
    <div id="loading-screen">
        <div class="loader text-center">
            <p>
                <img src="./assets/img/logo-iegb-cargando.webp" width="200px" alt=""> <br><i class="fa-solid fa-spinner fa-spin"></i> Cargando...
            </p>
        </div>
    </div>
    <!--header-->
    <?php include_once("include/header.php"); ?>

    <!--contenido-->
    <main>

        <!--Carrousel-->
        <section id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/slider/slider-2.jpg" alt="" class="img-fluid">
                    <div class="container" >

                        <div class="carousel-caption text-center p-4 rounded" style="background-color:hsla(210, 100%, 5%, 0.8)">
                            <h1>IESTP ELEAZAR GUZMÁN BARRÓN.</h1>
                            <!-- <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                        </div>


                    </div>
                </div>

                <div class="carousel-item">
                    <img src="./assets/img/slider/mecatronica_automotriz.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Atrás</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </section>

        <!--Admisión-->
        <section class="container " style="margin-top:90px;">
            <div class="row ">
                <div class="col-lg-6">
                    <h2 class="mb-4"><span class=" borde-texto">Spot <span class="titulo-color">Admisión</span> 2024-II</span></h2>
                    <p class="small">Programas de estudios: Administración de redes y comunicaciones, Contabilidad, Electronica industrial, Mecatrónica automotriz.</p>
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/U2ax611GGG4?si=4dmXdA_Pq7bKnRM8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 borde-texto">Noticias y <span class="titulo-color">eventos</span></h2>
                        <a href="#" class="btn btn-sm btn-primary ">Ver todas las noticias y eventos</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li title="Leer Capacitación sobre el monitoreo de EFSRT 2024-II">
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center link-body-emphasis text-decoration-none border-top" href="#">
                                        <div class="col-lg-3 text-center bg-dark">
                                            <img src="./assets/img/noticias/noticias.png" alt="" class="img-fluid rounded">
                                        </div>
                                        <div class="col-lg-9 position-relative ">
                                            <h5 class="mb-0 fw-bold">Capacitación sobre el monitoreo de EFSRT 2024-II</h5>
                                                <span style="margin-top:-25px; padding:5px 30px;"
                                                class="badge text-bg-warning mx-auto rounded-pill">
                                                Noticia
                                            </span>
                                            <p class="small mb-0">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Discing elit. Donec odio. elit. Donec odio. elit. Donec odio. elit. Donec odio.
                                            </p>
                                            <small class="text-body-secondary">09 de julio 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <div class="col-lg-3">
                                            <img src="./assets/img/noticias/noticias.png" alt="" class="img-fluid rounded">
                                        </div>
                                        <div class="col-lg-9">
                                            <h5 class="mb-0  fw-bold">Matrículas 2024-II</h5>
                                            <p class="small mb-0">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                            </p>
                                            <small class="text-body-secondary">09 de julio 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <div class="col-lg-3">
                                            <img src="./assets/img/noticias/noticias.png" alt="" class="img-fluid rounded">
                                        </div>
                                        <div class="col-lg-9">
                                            <h5 class="mb-0  fw-bold">Example blog post title</h5>
                                            <p class="small mb-0">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                            </p>
                                            <small class="text-body-secondary">09 de julio 2024</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Estadistica -->
        <section class="container-fluid gradient-background2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 ">
                        <span class="counter display-3 fw-bold blinking-border">69</span>
                        <br>
                        <span class="titulo-contador"> Docentes</span>
                    </div>
                    <div class="col-lg-3">
                        <span class="counter display-3 fw-bold blinking-border">856</span>
                        <br>
                        <span class="titulo-contador"> Estudiantes</span>
                    </div>
                    <div class="col-lg-3">
                        <span class="counter display-3 fw-bold blinking-border">320</span>
                        <br>
                        <span class="titulo-contador"> Egresados</span>
                    </div>
                    <div class="col-lg-3">
                        <span class="counter display-3 fw-bold blinking-border">589</span>
                        <br>
                        <span class="titulo-contador"> Titulados</span>
                    </div>

                </div>
            </div>
        </section>


        <!--Programas de estudios-->
        <section class="container-fluid" style="padding-bottom: 90px; border-bottom: 5px solid #0358ad; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <h2><span class="borde-texto">Nuestros <span class="titulo-color">programas</span> de estudios</span></h2>
                        <p>Duración de estudios : 3 años (seis semestres académicos)</p>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">

                    <?php for ($i = 0; $i < 9; $i++) { ?>
                        <div class="col item">
                            <div class="card shadow-sm programa-item">
                                <img src="./assets/img/programas/programas1.png" alt="" class="img-fluid "><!-- rounded p-2 style="border-bottom: 10px solid #003366"-->
                                <div class="card-body">
                                    <span class="text-primary small">Programa de estudios</span>
                                    <h4 class=" card-title"><a href="#" class="text-decoration-none fw-bold">Administración de redes y comunicaciones</a></h4>
                                    <p class="card-text small">
                                        Código: 02920202
                                        <br>
                                        Nivel formativo: Profesional técnico.
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <a href="" class="btn btn-sm btn-primary">Ingresar</a>
                                    </div>

                                    <!-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </section>

        <!--Links-->
        <!-- <section class="container-fluid py-5" style="background-color: hsla(199, 100%, 47%, 0.1);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/registra.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/titula.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/avanza.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/conecta.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/registra.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="image-container">
                            <img src="./assets/img/links/registra.png" class="img-fluid" alt="Imagen 4">
                        </div>
                    </div>

                </div>
            </div>


        </section> -->

        <!--Links de referencia-->
        <section class="container-fluid" style="padding-top: 80px; padding-bottom: 80px; background-color: #003366; ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-white">Enlaces de interés</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-white fw-bold">Empresas con convenio</h6>
                        <ul class="list-unstyled small">
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/minedu" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Ministerio de Educación
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.dreancash.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Dirección Regional de Educación de Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/regionancash" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Gobierno Regional de Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/munihuaraz" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Municipalidad Provincial de Huaraz
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/muniindependencia-huaraz" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Municipalidad Distrital de Independencia
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://diresancash.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Dirección Regional de Salud Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.hospitalvrg.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Hospital de Huaraz "Victor Ramos Guardia"
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white fw-bold">De interés</h6>
                        <ul class="list-unstyled small">
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/minedu" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Ministerio de Educación
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.dreancash.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Dirección Regional de Educación de Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/regionancash" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Gobierno Regional de Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/munihuaraz" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Municipalidad Provincial de Huaraz
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/muniindependencia-huaraz" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Municipalidad Distrital de Independencia
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://diresancash.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Dirección Regional de Salud Ancash
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.hospitalvrg.gob.pe" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Hospital de Huaraz "Victor Ramos Guardia"
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.pronabec.gob.pe/beca-18/" target="_blank" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> PRONABEC (Beca 18)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white fw-bold">Sistemas</h6>

                        <ul class="list-unstyled small">
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/minedu" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Intranet Estudiantes
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/minedu" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Intranet Docentes
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://www.gob.pe/minedu" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Intranet Administrativos
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://eva.iegb.edu.pe/login/index.php" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Entorno Virtual de aprendizaje (EVA)
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://elibro.net/es/lc/iegb/login_usuario/?next=/es/lc/iegb/inicio/" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Biblioteca virtual
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="#" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Bolsa laboral
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://registra.minedu.gob.pe/#!/" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Registra Minedu
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://avanza.minedu.gob.pe" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Avanza Minedu
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://titula.minedu.gob.pe" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Titula Minedu
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://conecta.minedu.gob.pe" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> Conecta Minedu
                                </a>
                            </li>
                            <li class="list-item text-white">
                                <a href="https://servicios-ayni.minedu.gob.pe/ayni/inicio" target="_blank" class="text-white  text-decoration-none">
                                    <i class="fa-solid fa-circle-arrow-right text-white"></i> AYNI Minedu
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once("include/footer.php"); ?>

    <?php include_once("include/js.php"); ?>

    <script>
        $(window).on('load', function() {
            // Oculta la pantalla de carga con un efecto de desvanecimiento
            $('#loading-screen').fadeOut('slow');
        });

        $(document).ready(function() {
            //Carrousel
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            });

            //Contador
            var hasCounted = false;

            function startCounting() {
                $('.counter').each(function() {
                    var $this = $(this);
                    var countTo = $this.text();
                    $this.text('0');

                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
            }

            /**** ESTADISTICA CONTADOR*/
            $(window).on('scroll', function() {
                var sectionOffset = $('.gradient-background2').offset().top - window.innerHeight;
                if ($(window).scrollTop() > sectionOffset && !hasCounted) {
                    startCounting();
                    hasCounted = true; // Evita que el contador se reinicie al hacer scroll nuevamente
                }
            });

        })
    </script>
</body>

</html>