<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de redes - IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>

    <style>
        .card {
            position: relative;
            width: 200px;
            /* Ancho reducido */
            height: 350px;
            /* Altura reducida */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card .imgBx {
            position: relative;
            width: 100%;
            height: 180px;
            /* Altura reducida */
            border-radius: 15px;
            overflow: hidden;
        }

        .card .imgBx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card .imgBx:hover img {
            transform: scale(1.1);
            /* Escala reducida */
        }

        .card .content {
            position: relative;
            width: 100%;
            height: 150px;
            /* Altura reducida */
            background: #232949;
            padding: 15px 25px;
            /* Relleno reducido */
            color: #fff;
            border-radius: 15px;
            border-top-left-radius: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card .content .price {
            font-size: 20px;
            /* Tamaño de fuente reducido */
            font-weight: bold;
            color: #fff;
            margin-bottom: 8px;
            /* Espacio reducido */
        }

        .card .content ul {
            margin-top: 8px;
            /* Espacio reducido */
            list-style: none;
            color: #fff;
        }

        .card .content ul li {
            margin-bottom: 6px;
            /* Espacio reducido */
        }

        .card .content .price a {
            color: #fff;
            text-decoration: none;
        }

        .card .content button {
            align-self: flex-start;
            background-color: #ff6347;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            /* Relleno reducido */
            font-size: 14px;
            /* Tamaño de fuente reducido */
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card .content button:hover {
            background-color: #e5533e;
            transform: scale(1.05);
        }

        .card .content button:focus {
            outline: none;
        }


        .contenido {
            margin: 1em 0;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2em;
        }

        .card-container .card {
            flex: 1 1 calc(50% - 1em);
        }
    </style>
</head>

<body>

    <!--header-->
    <?php include_once("include/header.php"); ?>

    <!--contenido-->
    <main>
        <!--titulo del programa-->
        <section class="container-fluid" style="background-color:#DBEDF2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="padding: 50px 0px 10px 0">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Plana Docente</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style="background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="index.php"><i class="fa-solid fa-house"></i></a></li>
                                <li class="breadcrumb-item">Nosotros</li>
                                <li class="breadcrumb-item active" aria-current="page">Plana Docente</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row g-8">
                <div class="col-md-8">
                    <div class="contenido card-container">
                        <h3>Descripción</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem eligendi voluptates rem aperiam accusamus vero, soluta vel tempora doloremque cumque doloribus in velit eum expedita error ex delectus? Ullam!</p>
                    </div>
                    <div class="contenido card-container">
                        <div class="contenido card-container">
                            <h3>Area n° 1: Computacion e informatica</h3>
                        </div>
                        <div class="card">
                            <div class="imgBx">
                                <img src="assets/img/nosotros/persona1.webp" alt="Persona">
                            </div>
                            <div class="content">
                                <span class="price">
                                    <a href="#">Nombre Docente</a>
                                </span>
                                <ul>
                                    <li>Docente</li>
                                </ul>
                                <button>Ver más</button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="imgBx">
                                <img src="assets/img/nosotros/persona1.webp" alt="Persona">
                            </div>
                            <div class="content">
                                <span class="price">
                                    <a href="#">Nombre Docente</a>
                                </span>
                                <ul>
                                    <li>Docente</li>
                                </ul>
                                <button>Ver más</button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="imgBx">
                                <img src="assets/img/nosotros/persona1.webp" alt="Persona">
                            </div>
                            <div class="content">
                                <span class="price">
                                    <a href="#">Nombre Docente</a>
                                </span>
                                <ul>
                                    <li>Docente</li>
                                </ul>
                                <button>Ver más</button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="imgBx">
                                <img src="assets/img/nosotros/persona1.webp" alt="Persona">
                            </div>
                            <div class="content">
                                <span class="price">
                                    <a href="#">Nombre Docente</a>
                                </span>
                                <ul>
                                    <li>Docente</li>
                                </ul>
                                <button>Ver más</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">Avisos o texto porseacaso</h4>
                            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                        </div>

                        <div>
                            <h4 class="fst-italic">Noticias</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Example blog post title</h6>
                                            <small class="text-body-secondary">January 15, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">This is another blog post title</h6>
                                            <small class="text-body-secondary">January 14, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">A third blog post title</h6>
                                            <small class="text-body-secondary">January 13, 2024</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--footer-->
    <?php include_once("include/footer.php"); ?>
    <?php include_once("include/js.php"); ?>

</body>

</html>