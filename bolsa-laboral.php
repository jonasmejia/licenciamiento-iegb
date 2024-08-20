<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa laboral - IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php") ?>

    <?php include_once("include/css.php"); ?>
</head>
<style>
    /* Estilo para los bordes y colores de las pestañas (tabs) */
    .nav-tabs .nav-link {
        border: 1px solid #007bff;
        /* Borde de las pestañas */
        border-radius: 5px;
        /* Bordes redondeados en la parte superior */
        margin-right: 5px;
        /* Espaciado entre pestañas */
        color: #007bff;
        /* Color del texto de las pestañas */
        background-color: #f8f9fa;
        /* Color de fondo de las pestañas */
        margin-bottom: 15px;
    }

    .nav-tabs {
        /* padding-bottom: 15px; */
    }

    /* Estilo para la pestaña activa */
    .nav-tabs .nav-link.active {
        background-color: #003366;
        /* Color de fondo de la pestaña activa */
        color: white;
        /* Color del texto de la pestaña activa */
    }

    /* Estilo para el contenido de las pestañas */
    .tab-content {
        /* border: 1px solid #003366;
            border-top: none; 
            padding: 15px; 
            border-radius: 0 5px 5px 5px;  */
        padding-top: 20px;
        margin-top: 10px;
    }

    .text-justify {
        text-align: justify;
    }

    h3 .border-titulo:before {

        content: "";
        height: 3px;
        width: 100px;
        position: absolute;
        left: 0;
        bottom: -15px;
        z-index: 1;
        background: #8b0000;
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
                        <!-- <p class="p-0">Programa de estudio</p> -->
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">
                            Bolsa laboral
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item">
                                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Servicios
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Bolsa laboral
                                </li>
                            </ol>
                        </nav>
                    </div>


                </div>
            </div>
        </section>

        <!--Programa-->
        <div class="container mt-3">
            <div class="row">
                <!--contenido-->
                <section class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                                    <h3 class="mb-0">Featured post</h3>
                                    <div class="mb-1 text-body-secondary">Nov 12</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                        Continue reading
                                        <svg class="bi">
                                            <use xlink:href="#chevron-right" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- sidebar -->
                <aside class="col-lg-3">
                    aside
                </aside>
            </div>


        </div>

        <!-- Modal itinerario formativo-->
        <div class="modal fade" id="popUp-pdf" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel"><img src="./assets/img/escudo-iegb.webp" alt="escudo iegb" width="50"> <span class="ml-5">Itinerario formativo: Administración de redes y comunicaciones. </span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" src="./assets/docs/itinerarios/Itinerario-formativo-ARC.pdf" style="width:100%; height: 500px;" frameborder="0"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal horario-->
        <div class="modal fade" id="popUp-horario" tabindex="-2" aria-labelledby="horarioModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="horarioModalLabel"><img src="./assets/img/escudo-iegb.webp" alt="escudo iegb" width="50"> <span class="ml-5">Horario 2024-I: Administración de redes y comunicaciones. </span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" src="./assets/docs/horarios/Horario-2024-1-ARC-IEGB.pdf" style="width:100%; height: 500px;" frameborder="0"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
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


            /**** Para el itinerario*/
            function verPDF(url, title) {
                document.getElementById('pdf-viewer').src = url;
                document.getElementById('pdfModalLabel').innerText = title;
            }

        })
    </script>
</body>

</html>