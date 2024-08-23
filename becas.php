<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becas y Creditos Educativos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>

</head>

<style>
    .pasos {
        margin-left: 5rem;
        margin-top: 1rem;
        margin-right: -1rem;
        background-color: #fff;
        padding: 1rem;
        /* Espaciado adicional */
        border-radius: 10px;
        /* Bordes redondeados */
    }

    .pasos h1,
    .pasos h3 {
        color: #083877;
    }

    .pasos p {
        color: rgb(0, 0, 0);
        font-size: 1rem;
        line-height: 1.6;
    }

    .container-unu {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: flex-start;
        gap: 1em;
        justify-content: space-between;
    }

    .container-unu h1 {
        font-size: 2.5em;
        text-align: center;
    }

    .container-awt {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* ......... */
    .nav-pills .nav-link {
        margin-left: -0.6rem;
        height: 7rem;
        width: 17rem;
        color: #033f7f;
        transition: background-color 0.3s ease, color 0.3s ease;
        font-size: 110%;
        justify-content: left;
    }

    .nav-pills .nav-link.active {
        background-color: #022c58;
        color: #fff;
    }

    .nav-pills .nav-link:hover {
        background-color: #0056b3;
        color: #fff;
    }

    .circle-icon {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background-color: #0a488a;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        font-size: 1.5rem;
    }

    .nav-pills .nav-link.active .circle-icon {
        background-color: #022c58;
        transform: scale(1.1);
    }

    .nav-pills .nav-link:hover .circle-icon {
        background-color: #0056b3;
        transform: scale(1.1);
    }

    .nav-pills .nav-link {
        display: flex;
        align-items: center;
        padding: 1rem;
        gap: 1rem;
    }

    .nav-pills .nav-link .circle-icon i {
        font-size: 1.5rem;
    }

    /* Botones de Plan de Estudios */
    .btn-primary {
        display: inline-flex;
        align-items: center;
        background-color: #0a488a;
        border: none;
        border-radius: 25px;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        color: #fff;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary i {
        margin-left: 0.5rem;
        font-size: 1.2rem;
        color: #fff;
        transition: transform 0.3s ease;
    }

    .btn-primary:hover i {
        transform: scale(1.2);
    }

    .btn-primary:hover {
        background-color: #1567bf;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.4);
    }

    aside {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.312);
        justify-items: center;
        align-items: center;
        max-width: 11rem;
        height: 35rem;
        margin: 0rem;
    }

    /* .............. */
    .tab-pane h4 {
        color: #0a488a;
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .tab-pane p {
        font-size: 1.1rem;
        line-height: 1.5;
        color: #333;
        margin-bottom: 1rem;
    }

    .tab-pane hr {
        border: 0;
        height: 2px;
        background-color: #0a488a;
        margin: 1rem 0;
    }

    .table {
        background-color: #fff;
        margin-top: 1rem;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #c8cbce;
        padding: 1rem;
    }

    .tdceldatitulo {
        background-color: #09215d;
        color: #fff;
        font-weight: bold;
        padding: 0.75rem;
        text-align: center;
    }

    .table thead th {
        background-color: #09215d;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .table tbody td h5 {
        font-size: 1rem;
        color: #09215d;
        margin: 0;
    }

    .table tbody td {
        vertical-align: middle;
        color: #333;
        font-size: 1rem;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .tab-content {
        background-color: #f8f9fa;
        padding: 1rem;
    }

    /* certificado */
    .icomo {
        background-color: #dde1e9;
        border-radius: 10px;
        padding: 1.3rem;
        margin-bottom: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .icomo i {
        font-size: 1.7rem;
        color: #112e75;
    }

    .icomo h6 {
        font-size: 1rem;
        color: #0a488a;
        margin: 0;
        font-weight: bold;
    }

    .icomo p {
        font-size: 1rem;
        color: #202020;
        margin: 0;
    }
</style>

<body>
    <?php include_once("include/header.php"); ?>
    <main>
        <section class="container-fluid" style=" background-color:#DBEDF2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="padding: 50px 0px 10px 0">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Becas y Creditos Educativos</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> </a></li>
                                <li class="breadcrumb-item">Admision</li>
                                <li class="breadcrumb-item active" aria-current="page">Becas y Creditos Educativos</li>
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
                        <h1>Subtitulos</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur cupiditate rem quas eius voluptatibus veniam, suscipit ullam similique est unde sed eum officiis harum provident quisquam deserunt atque nam?
                        </p>
                        <div class="foto">

                        </div>
                        <div class="row">
                            <aside class="col-lg-4">
                                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" id="v-pills-001-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-001">
                                            <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                                                <i class="fa fa-user"></i>
                                            </div> Becas
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="v-pills-002-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-002">
                                            <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                                                <i class="fa-solid fa-book-open-reader"></i>
                                            </div> Requisitos
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="v-pills-003-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-003">
                                            <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                                                <i class="fa-solid fa-clock"></i>
                                            </div>proceso y seleccion
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="v-pills-004-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-004">
                                            <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                                                <i class="fa-solid fa-trophy"></i>
                                            </div>Beneficios
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="v-pills-005-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-005">
                                            <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                                                <i class='bx bx-male-female'></i>
                                            </div>Creditos
                                        </button>
                                    </li>
                                </ul>
                            </aside>
                            <section class="col-lg-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-001" role="tabpanel"
                                        aria-labelledby="v-pills-001-tab">
                                        <h4>Becas</h4>
                                        <p>El profesional técnico en Administración de Redes y Comunicaciones brinda asistencia a nivel operativo y funcional en los sistemas o servicios de TI, realizando la puesta en producción,implementación, configuración y administración de la infraestructura de redes y servicios de comunicaciones, teniendo en cuenta las políticas de seguridad de acuerdo a los roles y perfiles de los colaboradores de la organización y a la planificación efectuada.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-002" role="tabpanel" aria-labelledby="v-pills-002-tab">
                                        <h4> Requisitos</h4>
                                        <a class="btn btn-primary mb-2" href="" target="_blank">Requisitos <i
                                                class="fa-regular fa-file-pdf"></i></a>

                                        <ul class="nav nav-tabs" id="ciclo-tab" role="tablist">
                                            <li class="nav-item">
                                                <button class="nav-link active" id="cicloi-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cicloi-pane">Pasos</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" id="cicloii-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cicloii-pane">Documenots</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" id="cicloiii-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cicloiii-pane">Datos</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" id="cicloiv-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cicloiv-pane">Datos 2</button>
                                            </li>

                                        </ul>

                                        <div class="tab-content">
                                            <!-- Ciclo I -->
                                            <div class="tab-pane fade show active" id="cicloi-pane">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Nombre de Asignatura</th>
                                                            <th>Créditos</th>
                                                            <th>Horas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>1°</h5>
                                                            </td>
                                                            <td>Base de Datos</td>
                                                            <td>3</td>
                                                            <td>80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>1°</h5>
                                                            </td>
                                                            <td>Base de Datos</td>
                                                            <td>3</td>
                                                            <td>80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>3°</h5>
                                                            </td>
                                                            <td>ejemplo</td>
                                                            <td>3</td>
                                                            <td>80</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="cicloii-pane">
                                                <div class="icomo">
                                                    <i class='bx bxs-bookmarks'></i>
                                                    <h6>Documento:</h6>
                                                    <p>Soporte técnico de la tecnología de la información.</p>
                                                </div>
                                                <div class="icomo">
                                                    <i class='bx bxs-bookmarks'></i>
                                                    <h6>Documento:</h6>
                                                    <p>Implementación de redes y servicios de información.</p>
                                                </div>
                                                <div class="icomo">
                                                    <i class='bx bxs-bookmarks'></i>
                                                    <h6>Documento:</h6>
                                                    <p>Gestión de la infraestructura de red y de la seguridad de los servicios.</p>
                                                </div>
                                            </div>
                                            <!-- Ciclo III -->
                                            <div class="tab-pane fade" id="cicloiii-pane">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Nombre de Asignatura</th>
                                                            <th>Créditos</th>
                                                            <th>Horas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>1°</h5>
                                                            </td>
                                                            <td>Base de Datos</td>
                                                            <td>3</td>
                                                            <td>80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>2°</h5>
                                                            </td>
                                                            <td>Lógica Computacional</td>
                                                            <td>3</td>
                                                            <td>80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>3°</h5>
                                                            </td>
                                                            <td>Análisis y Diseño de Sistemas de Información</td>
                                                            <td>4</td>
                                                            <td>96</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Ciclo IV -->
                                            <div class="tab-pane fade" id="cicloiv-pane">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Nombre de Asignatura</th>
                                                            <th>Créditos</th>
                                                            <th>Horas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>1°</h5>
                                                            </td>
                                                            <td>Administración de Base de Datos</td>
                                                            <td>4</td>
                                                            <td>96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>2°</h5>
                                                            </td>
                                                            <td>Modelamiento de Sistemas</td>
                                                            <td>4</td>
                                                            <td>96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>3°</h5>
                                                            </td>
                                                            <td>Programación Empresarial</td>
                                                            <td>5</td>
                                                            <td>128</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-003" role="tabpanel" aria-labelledby="v-pills-003-tab">
                                        <h4>procesos y seleccion</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perspiciatis? Minus consequatur vel autem molestiae quod ratione itaque mollitia ducimus dignissimos, beatae nobis illo doloribus, dolorum aspernatur. Iste</p>
                                        <hr>
                                        <h4>cronograma</h4>
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1" class="tdceldatitulo">Fases</th>
                                                    <th colspan="5" class="tdceldatitulo">Actividades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5>1º</h5>
                                                    </td>
                                                    <td>7:40 a.m - 8:35 a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>2º</h5>
                                                    </td>
                                                    <td>8:25 a.m - 9:20 a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>3º</h5>
                                                    </td>
                                                    <td>9:20 a.m - 10:05 a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>4º</h5>
                                                    </td>
                                                    <td>10:05 a.m - 10:50 a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>---</h5>
                                                    </td>
                                                    <td>10:50 a.m - 11:15 a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>5º</h5>
                                                    </td>
                                                    <td>11:15 a.m - 12:00 p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>6º</h5>
                                                    </td>
                                                    <td>12:00 p.m - 12:45 p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>7º</h5>
                                                    </td>
                                                    <td>12:45 p.m - 13:30 p.m</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-004" role="tabpanel" aria-labelledby="v-pills-004-tab">
                                        <h4>Beneficios</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a sunt minus accusantium, culpa enim commodi, beatae labore, vero quia sit ad earum! Distinctio voluptatem temporibus, deserunt nihil magni veniam?</p>
                                        <hr>
                                        <div class="icomo">
                                            <i class='bx bxs-bookmarks'></i>
                                            <h6>Explicacion</h6>
                                            <p> ipsum dolor sit amet consectetur adipisicing elit. Rerum a sunt minus.</p>
                                        </div>
                                        <div class="icomo">
                                            <i class='bx bxs-bookmarks'></i>
                                            <h6>Explicacion</h6>
                                            <p> ipsum dolor sit amet consectetur adipisicing elit. Rerum a sunt minus.</p>
                                        </div>
                                        <div class="icomo">
                                            <i class='bx bxs-bookmarks'></i>
                                            <h6>Explicacion</h6>
                                            <p> ipsum dolor sit amet consectetur adipisicing elit. Rerum a sunt minus.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-005" role="tabpanel" aria-labelledby="v-pills-005-tab">
                                        <h4>creditos educativos</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo ea esse harum quo similique ullam molestias, beatae deleniti provident repellat nesciunt?Fugiat quasi exercitationem modi rerum alias facere culpa.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
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