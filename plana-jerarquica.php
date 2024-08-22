<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plana Jerárquica - IESTP Eleazar Guzmán Barrón</title>

    <?php include_once("include/meta.php"); ?>
    <?php include_once("include/css.php"); ?>

    <style>
        .tree {
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .tree ul {
            padding-top: 40px;
            position: relative;
            transition: .5s;
            margin-top: 18px;
        }

        .tree li {
            display: inline-block;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px;
            transition: .5s;
            margin-top: -8px;
        }

        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 52%;
            border-top: 2px solid #ccc;
            width: 52%;
            height: 20px;
        }

        .tree li::after {
            right: auto;
            left: 51%;
            border-left: 2px solid #ccc;
        }

        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }

        .tree li:only-child {
            padding-top: 0;
        }

        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }

        .tree li:last-child::before {
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
        }

        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
        }

        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid #ccc;
            width: 0;
            height: 30px;
        }

        .tree li button {
            border: 2px solid #ccc;
            padding: 15px 15px;
            display: inline-block;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: -4em;
        }

        .tree li button img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
            border-radius: 50%;
            border: 3px solid #003366;
            object-fit: cover;
            /* Ajusta la imagen al cuadro circular */
        }

        .tree li button span {
            display: block;
            color: #003366;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .tree li button:hover,
        .tree li button:hover span {
            background-color: #f0f8ff;
            border-color: #003366;
            color: #003366;
        }

        .tree li button:hover img {
            border-color: #f0f8ff;
        }

        .tree li button:hover+ul li::after,
        .tree li button:hover+ul li::before,
        .tree li button:hover+ul::before,
        .tree li button:hover+ul ul::before {
            border-color: #003366;
        }

        /* ventana de informacion */
        .popup .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .popup .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            background: #fff;
            width: 600px;
            max-width: 90%;
            z-index: 2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: left;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .popup .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 35px;
            height: 35px;
            background: #333;
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
            cursor: pointer;
        }

        .popup .close-btn:hover {
            background: #ff0000;
        }

        .popup .popup-header {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .popup .popup-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .popup .popup-text {
            flex: 1;
        }

        .popup .popup-text h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .popup .popup-text p {
            margin-top: 10px;
            font-size: 16px;
            color: #666;
        }

        .popup.active .overlay {
            display: block;
            opacity: 1;
        }

        .popup.active .content {
            transition: all 100ms ease-in-out;
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
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
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Plana Jerárquica</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style="background-color:#DBEDF2">
                                <li class="breadcrumb-item">
                                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Nosotros</li>
                                <li class="breadcrumb-item active" aria-current="page">Plana Jerárquica</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- la ventana emergente -->
        <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <div class="popup-header">
                    <img src="assets/img/nosotros/persona2.webp" alt="" class="popup-image">
                    <div class="popup-text">
                        <h1 id="popup-title"></h1>
                        <p id="popup-content"></p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="row g-9">
            <div class="col-md-8">
                <div class="row">
                    <div class="tree">
                        <ul>
                            <li>
                                <button><span>Dirección</span></button>
                                <ul>
                                    <button onclick="togglePopup('Título 1', 'Este es el contenido para el primer botón.', 'assets/img/nosotros/persona2.webp')">
                                        <img src="assets/img/nosotros/persona2.webp" alt="Image 1">
                                        <span>Mg. Carlos Geronimo Carrasco Giraldo</span>
                                        <span>Director General</span>
                                        <p>Ver mas</p>
                                    </button>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="tree">
                        <ul>
                            <li> <button><span>Organo de apoyo</span> </button>
                                <ul>
                                    <li> <button onclick="togglePopup('Título 2', 'Este es el contenido para el segundo botón.', 'assets/img/nosotros/persona3.jpg')">
                                            <img src="assets/img/nosotros/persona3.jpg" alt="Image 3">
                                            <span class="cargo">Secretaria Académico</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li><button onclick="togglePopup('Título 3', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona4.jpg')">
                                            <img src="assets/img/nosotros/persona4.jpg" alt="Image 4">
                                            <span class="cargo">Coordinador de Área de Calidad</span>
                                            <p>Ver mas</p>
                                        </button> </li>
                                    <li><button onclick="togglePopup('Título 4', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona4.jpg')">
                                            <img src="assets/img/nosotros/persona7.jpg" alt="Image 4">
                                            <span class="cargo">Jefe de Área de Administración</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="tree">
                        <ul>
                            <li> <button><span>Jefes de Unidad</span> </button>
                                <ul>
                                    <li><button onclick="togglePopup('Título 5', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona3.jpg')">
                                            <img src="assets/img/nosotros/persona3.jpg" alt="Image 3">
                                            <span class="cargo">Jefe de Unidad Académica</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li><button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona4.jpg')">
                                            <img src="assets/img/nosotros/persona4.jpg" alt="Image 4">
                                            <span class="cargo">Jefe de Unidad de Bienestar y Empleabilidad</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="tree">
                        <ul>
                            <li> <button><span>Coordinadores de programas</span></button>
                                <ul>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona6.jpg" alt="Image 6">
                                            <span class="cargo">Área de Computación e Informática</span>
                                            <p>Ver mas</p>
                                        </button> </li>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona3.jpg')">
                                            <img src="assets/img/nosotros/persona3.jpg" alt="Image 6">
                                            <span class="cargo">Área de Contabilidad</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona6.jpg" alt="Image 6">
                                            <span class="cargo"> Área de Electrónica Industrial</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="tree">
                        <ul>
                            <li><button><span>Coordinadores de programas</span> </button>
                                <ul>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona3.jpg" alt="Image 6">
                                            <span class="cargo">Área Guía Oficial de Turismo</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona6.jpg" alt="Image 6">
                                            <span class="cargo">Área de Mecánica Automotriz</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li> <button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona3.jpg" alt="Image 6">
                                            <span class="cargo">Área de Producción Agropecuaria</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="tree">
                        <ul>
                            <li> <button><span>Coordinadores de programas</span> </button>
                                <ul>
                                    <li><button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona7.jpg" alt="Image 7">
                                            <span class="cargo">Área de Electrotecnia</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li><button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona8.jpg" alt="Image 8">
                                            <span class="cargo">Área de Enfermería Técnica</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                    <li><button onclick="togglePopup('Título 6', 'Este es el contenido para el botón.', 'assets/img/nosotros/persona6.jpg')">
                                            <img src="assets/img/nosotros/persona8.jpg" alt="Image 8">
                                            <span class="cargo">Área de Técnica en Farmacia</span>
                                            <p>Ver mas</p>
                                        </button></li>
                                </ul>
                            </li>
                            </li>
                        </ul>
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

    <?php include_once("include/footer.php"); ?>
    <?php include_once("include/js.php"); ?>

    <script>
        $(window).on('load', function() {
            $('#loading-screen').fadeOut('slow');
        });

        function togglePopup(title, content, imageUrl) {
            document.getElementById("popup-title").textContent = title;
            document.getElementById("popup-content").textContent = content;
            document.querySelector("#popup-1 .popup-image").src = imageUrl;
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
</body>

</html>