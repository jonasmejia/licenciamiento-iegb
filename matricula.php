<?php $menu = "programas"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admisión</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php include_once("include/meta.php") ?>
    <?php include_once("include/css.php"); ?>
    <style>
        body {
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .process-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .step {
            flex: 1 1 calc(33.333% - 20px);
            text-align: center;
            padding: 20px;
            position: relative;
            border-radius: 10px;
            border: 2px dashed #ddd;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .step::before {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #fff;
            border: 4px solid #ddd;
            top: -14px;
            left: 50%;
            transform: translateX(-50%);
        }

        .step:nth-child(1) {
            border-color: #fca311;
        }

        .step:nth-child(1)::before {
            border-color: #fca311;
        }

        .step:nth-child(2) {
            border-color: #198754;
        }

        .step:nth-child(2)::before {
            border-color: #198754;
        }

        .step:nth-child(3) {
            border-color: #007bff;
        }

        .step:nth-child(3)::before {
            border-color: #007bff;
        }

        .step-title {
            font-weight: bold;
            font-size: 1.2em;
            margin: 10px 0;
            color: #333;
        }

        .step-description {
            font-size: 0.9rem;
            color: #003366;
        }

        .arrow {
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-left: 20px solid #ddd;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: -30px;
        }

        .step:first-child .arrow {
            display: none;
        }

        .section-uwu {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .cuadrito {
            flex: 1 1 calc(33.333% - 1rem);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cuadrito:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .cuadrito img {
            max-width: 60%;
            height: auto;
            margin-bottom: 1rem;
        }

        .cuadrito h5 {
            font-size: 1.4rem;
            color: #094888;
            margin-bottom: 0.3rem;
        }

        .cuadrito p {
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .breadcrumb {
            background-color: #DBEDF2;
        }

        .breadcrumb-item a {
            color: #003366;
        }

        .breadcrumb-item.active {
            color: #007bff;
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .p-2 {
            padding: 1rem;
        }

        .bg-body-tertiary {
            background-color: #DBEDF2;
        }
    </style>
</head>

<body>
    <?php include_once("include/header.php"); ?>
    <main>
        <section class="container-fluid bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center py-4">
                        <h1 class="fw-bold p-2" style="background-color: #003366; color:white">Matrícula</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 rounded-3">
                                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="/"><i class="fa-solid fa-house"></i> Inicio</a></li>
                                <li class="breadcrumb-item">Admisión</li>
                                <li class="breadcrumb-item" aria-current="page">Matrícula</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <h3>Subtítulo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit corrupti consequuntur, fugiat exercitationem necessitatibus tenetur iusto ut porro quas totam adipisci ipsum perferendis voluptatibus architecto tempora velit quam, a nam.</p>
                    </div>
                    <div class="process-container">
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/fcbf49/user-group-man-man.png" class="icon" alt="Emphasise Icon">
                            <div class="step-title" style="color: #fca311;">Enfatizar</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/20c997/organization.png" class="icon" alt="Define Icon">
                            <div class="step-title" style="color: #198754;">Definir</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/00bcd4/idea.png" class="icon" alt="Ideate Icon">
                            <div class="step-title" style="color: #007bff;">Idear</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                    </div>

                    <div class="process-container">
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/fcbf49/user-group-man-man.png" class="icon" alt="Emphasise Icon">
                            <div class="step-title" style="color: #fca311;">Enfatizar</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/20c997/organization.png" class="icon" alt="Define Icon">
                            <div class="step-title" style="color: #198754;">Definir</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                        <div class="step">
                            <div class="arrow"></div>
                            <img src="https://img.icons8.com/ios-filled/100/00bcd4/idea.png" class="icon" alt="Ideate Icon">
                            <div class="step-title" style="color: #007bff;">Idear</div>
                            <div class="step-description">Lorem ipsum dolor sit amet, mea regione diamet principes at.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-uwu">
                        <div class="cuadrito">
                            <img src="https://img.icons8.com/ios-filled/100/094888/organization.png" alt="Organize">
                            <h5>Texto</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="cuadrito">
                            <img src="https://img.icons8.com/ios-filled/100/094888/idea.png" alt="Innovate">
                            <h5>Documentos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="cuadrito">
                            <img src="https://img.icons8.com/ios-filled/100/094888/user-group-man-man.png" alt="Collaborate">
                            <h5>Datos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
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
