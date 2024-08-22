<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admision</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>

</head>

<style>
    body {
        display: block;
        align-items: center;
        background-color: #ffffff;
        text-align: center;
        justify-content: center;
    }
    .pasos {
        margin: 4rem;
        margin-top: 2rem;
    }
    .pasos h1,
    .pasos h3 {
        color: #083877;
    }

    .pasos p {
        color: rgb(0, 0, 0);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .container-unu {
        min-height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5em;
    }

    .container-unu h1 {
        font-size: 2em;
        position: relative;
    }

    .content-boxq {
        position: relative;
        display: flex;
        gap: 2em;
    }

    .content-boxq::after {
        content: '';
        position: absolute;
        top: 90px;
        width: 100%;
        height: 5px;
        background-color: rgb(12, 92, 129);
        border-radius: 1em;
        z-index: 1;
    }

    .box {
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        justify-content: center;
        padding: 1em;
        gap: 1em;
        max-width: 300px;
        transition: 0.3s ease-in-out;
    }

    .magem {
        border-radius: 3rem;
    }

    .box h3,
    p,
    .magem {
        opacity: 0.8;
        transition: 0.3s ease-in-out;
    }

    .circle {
        width: 4rem;
        height: 4rem;
        background-color: rgb(236, 231, 231);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease-in-out;
        z-index: 2;
    }

    .circle i {
        font-size: 2rem;
        color: #000;
        transition: 0.3s ease-in-out;
    }

    .box:hover .circle {
        background-color: rgb(18, 12, 109);
        transform: scale(1.2);
    }

    .box:hover .circle i {
        color: white;
    }

    .box:hover * {
        opacity: 1;
    }

    .box:hover h3 {
        transform: translateY(-20px);
    }

    .box:hover p,
    .box:hover .magem {
        transform: translateY(20px);
    }

    /* ----------- */
    .container {
        position: relative;
        display: contents;
        justify-content: center;
        align-items: center;
    }
/* ------------ */


    /* Registro */
    #registro {
        padding: 2rem;
    }

    #registro h2 {
        font-size: 2rem;
        color: #083188;
    }

    #registro p {
        font-size: 1.25rem;
        color: #555;
        margin-bottom: 20px;
    }

    #registro .btn {
        padding: 10px 30px;
        font-size: 1.25rem;
        color: white;
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.342);
        animation: float 3s ease-in-out infinite;
    }

    #registro .btn:hover {
        background-color: #218838;
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* Cajas */
    #cuadros {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        gap: 2rem;
        margin: 4rem;
        margin-top: 2rem;
    }

    .tag-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .tag {
        position: relative;
        width: 540px;
        height: 200px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        padding: 25px;
    }

    .tag img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 20px;
    }

    .text-content {
        display: flex;
        font-size: 1rem;
        margin-right: 2rem;
        flex-direction: column;
    }


    .diamond {
        width: 40px;
        height: 40px;
        background-color: #fff;
        transform: rotate(45deg);
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%) rotate(45deg);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.432);
    }

    .diamond.blue {
        background: linear-gradient(45deg, #43BFC7, #21239b);
    }

    /* Media Queries */
    @media(max-width: 1200px) {
        .container-unu {
            margin: 5em 2em;
        }

        .content-boxq::after {
            display: none;
        }

        .content-boxq {
            flex-direction: column;
            gap: 1em;
        }

        .box {
            max-width: 600px;
        }

        h1 {
            text-wrap: nowrap;
        }

        h3 {
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
        }
    }
</style>
<body>
    <?php include_once("include/header.php"); ?>
    <main>
        <section class="container-fluid" style=" background-color:#DBEDF2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="padding: 50px 0px 10px 0">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Admision 2024</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> </a></li>
                                <li class="breadcrumb-item">Admision</li>
                                <li class="breadcrumb-item active" aria-current="page">Admision 2024</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="row g-9">
            <div class="col-md-8">
                <section class="pasos">
                    <div class="container-unu">
                        <h1>Inscripcion</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur cupiditate rem quas eius
                            voluptatibus veniam, suscipit ullam similique est unde sed eum officiis harum provident quisquam deserunt
                            atque nam?</p>
                        <div class="content-boxq">
                            <div class="box">
                                <h3>paso 1</h3>
                                <div class="circle">
                                    <i class='bx bx-check cir'></i>
                                </div>
                                <p>Lorem ipsumatione alias sed rerum fugiat? Voluptas sed harum tempore nulla animi, assumenda facilis.</p>
                                <img class="magem" src="assets/img/nosotros/4.jpg" alt="Imagen paso 1">
                            </div>
                            <div class="box">
                                <h3>paso 2</h3>
                                <div class="circle">
                                    <i class='bx bx-check cir'></i>
                                </div>
                                <p>Lorem ipratione alias sed rerum fugiat? Voluptas sed harum tempore nulla animi, assumenda facilis.</p>
                                <img class="magem" src="assets/img/nosotros/4.jpg" alt="Imagen paso 2">
                            </div>
                            <div class="box">
                                <h3>paso 3</h3>
                                <div class="circle">
                                    <i class='bx bx-check cir'></i>
                                </div>
                                <p>Lorem ipsum alias sed rerum fugiat? Voluptas sed harum tempore nulla animi, assumenda facilis.</p>
                                <img class="magem" src="assets/img/nosotros/4.jpg" alt="Imagen paso 3">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="cuadros">
                    <div class="tag-container">
                        <div class="tag blue">
                            <img src="assets/img/nosotros/2.jpg" alt="">
                            <div class="text-content">
                                <h3>Requisitos para la admisión</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio veritatis magni, atque debitis
                                    impedit amet assumenda eius et. Aspernatur deleniti voluptates enim porro dolores distinctio eaque.
                                    Explicabo necessitatibus beatae obcaecati?</p>
                            </div>
                            <div class="diamond blue"></div>
                        </div>
                    </div>
                   
                </section>

                <section id="registro">
                    <h2>¿Listo para Registrarte?</h2>
                    <p>Completa el formulario de registro para comenzar tu proceso de admisión.</p>
                    <button class="btn btn-success btn-lg">Registrarse para la Admisión</button>
                </section>

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
    </script>
</body>

</html>