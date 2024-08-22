<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de redes - IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>

    <style>
        .hexagon-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 3rem;
        }

        .hexagon-subtitulos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20em;
            color: #003366;
            font-weight: bold;
            border-radius: 25px;
            background-color: beige;
            width: 20em;
            margin: 2em;
            margin-top: 2em;
        }

        .hexagon {
            width: 19em;
            height: 19em;
            background-color: beige;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s ease-in-out;
        }

        .hexagon img {
            width: auto;
            height: 8rem;
            object-fit: cover;
        }

        .hexagon:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .hexagon {
                width: 10em;
                height: 10em;
            }

            .hexagon img {
                width: 6rem;
                height: 4rem;
            }
        }

        h3.text-center {
            color: #003366;
            text-align: center;
        }

        .himno-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 4rem;
        }

        .himno-text {
            flex: 1;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .himno-coro {
            color: #003366;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include_once("include/header.php"); ?>

    <main>
        <section class="container-fluid" style="background-color:#DBEDF2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="padding: 50px 0px 10px 0">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Símbolos Institucionales</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style="background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> </a></li>
                                <li class="breadcrumb-item">Nosotros</li>
                                <li class="breadcrumb-item active" aria-current="page">Nuestros símbolos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="row g-9">
            <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="hexagon-container">
                    <div class="hexagon"><img src="assets/img/escudo-iegb.webp" alt="Imagen 1"></div>
                    <div class="hexagon"><img src="assets/img/nosotros/egb-bandera.png" alt="Imagen 2"></div>
                </div>
                <div class="hexagon-subtitulos">
                    <h3 class=" mt-2">Escudo</h3>
                </div>
                <div class="hexagon-subtitulos">
                    <h3 class=" mt-2">Bandera</h3>
                </div>

                <div class="row justify-content-center">
                    <div class="hexagon-subtitulos">
                        <h3 class=" mt-2">Himno Institucional</h3>
                    </div>

                    <audio controls><source src="assets/img/nosotros/audio/HIMNO IESTP ELEAZAR GUZMAN BARRON.mp3" type="audio/mpeg"></audio>

                    <div class="himno-container mt-2">
                        <div class="himno-text">
                            <p class="himno-coro">1° <br /> Coro<br />
                                Entonando este canto eterno<br />
                                forjadores de nuestra región<br />
                                liderando educación con esmero<br />
                                Tecnológico Eleazar Guzmán Barrón (Bis)
                            </p>
                            <p>
                                Los valores son férreos pilares<br />
                                sabiduría es nuestra inspiración<br />
                                trabajando por nuestros ideales<br />
                                al servicio de nuestra nación.
                            </p>
                            <p>
                                Orgullosos llevando en la memoria<br />
                                nuestro aporte en la investigación<br />
                                cultivando el talento en la Historia<br />
                                con disciplina y dedicación.
                            </p>
                        </div>
                        <div class="himno-text">
                            <p class="himno-coro">2° <br /> Coro<br />
                                Entonando este canto eterno<br />
                                forjadores de nuestra región<br />
                                liderando educación con esmero<br />
                                Tecnológico Eleazar Guzmán Barrón (Bis)
                            </p>
                            <p>
                                Heredando ancashinos tu legado<br />
                                tecnología, ciencia y formación<br />
                                con orgullo tu nombre llevamos,<br />
                                paradigma de nuestra institución.
                            </p>
                            <p>
                                Estudiantes de prodigioso esfuerzo<br />
                                en tus aulas desbordan pasión<br />
                                valorando con ánimo sincero<br />
                                la excelencia de nuestra profesión.
                            </p>
                        </div>
                    </div>
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
            $('#loading-screen').fadeOut('slow');
        });
    </script>
</body>

</html>
