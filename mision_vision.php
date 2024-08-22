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
    :root {
        --main-color: #003366;
    }

    .about {
        position: relative;
    }

    .about-img img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        padding: 16px;
        box-shadow: 0 0 10px var(--main-color);
        transition: transform 0.4s ease-in-out;
        margin: 0;
    }

    .vertical-line {
        width: 8px;
        height: 40px;
        background-color: var(--main-color);
        margin-top: 0px;
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
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Misión y Visión</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> </a></li>
                                <li class="breadcrumb-item">Nosotros</li>
                                <li class="breadcrumb-item active" aria-current="page">Misión y Visión</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="row g-9">
            <div class="col-md-8">
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <section class="col-lg-6">
                            <div class="about d-flex flex-column align-items-center text-center">
                                <div class="about-img mb-3">
                                    <img src="assets/img/nosotros/visio.png" alt="Visión">
                                </div>
                                <hr class="vertical-line mb-2">
                                <div class=" p-4 bg-light rounded shadow-sm">
                                    <h3 class="mb-3 fw-bold text-primary">Visión</h3>
                                    <p class="card-text mb-0">Ser una Institución superior de formación profesional tecnológica con carreras profesionales acreditadas, formando profesionales competentes, con valores éticos, emprendedores, promotores del desarrollo sostenible en lo social, económico y ambiental.</p>
                                </div>
                            </div>
                        </section>

                        <section class="col-lg-6">
                            <div class="about d-flex flex-column align-items-center text-center">
                                <div class="about-img mb-3">
                                    <img src="assets/img/nosotros/mision.png" alt="Misión">
                                </div>
                                <hr class="vertical-line mb-2">
                                <div class=" p-4 bg-light rounded shadow-sm">
                                    <h3 class="mb-3 fw-bold text-primary">Misión</h3>
                                    <p class="card-text mb-0">Somos una institución pública formadora de profesionales técnicos de calidad, aplicando el enfoque por competencias, en proceso de acreditación y trabajamos a través de alianzas estratégicas para satisfacer la demanda del sector productivo.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">Avisos o texto porseacaso</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers,
                            content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Noticias</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2024</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
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
    </script>
</body>

</html>
