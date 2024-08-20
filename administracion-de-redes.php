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
                            Administración de redes y comunicaciones
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3" style=" background-color:#DBEDF2">
                                <li class="breadcrumb-item">
                                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Programas de estudio
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Administración de redes y comunicaciones
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
                    <div style="margin-bottom: 30px;">
                        <img src="./assets/img/programas/administracion/administracion.jpg" class="img-fluid" alt="">
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="descripcion-tab" data-bs-toggle="tab" data-bs-target="#descripcion" type="button" role="tab" aria-controls="descripcion" aria-selected="true">
                                DESCRIPCIÓN
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="plan-tab" data-bs-toggle="tab" data-bs-target="#plan" type="button" role="tab" aria-controls="plan" aria-selected="true">
                                PLAN DE ESTUDIOS
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="perfil-egreso-tab" data-bs-toggle="tab" data-bs-target="#perfil-egreso" type="button" role="tab" aria-controls="perfil-ingreso" aria-selected="true">
                                PERFIL DE EGRESO
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="modulos-tab" data-bs-toggle="tab" data-bs-target="#modulos" type="button" role="tab" aria-controls="modulos" aria-selected="true">
                                MÓDULOS Y CERTIFICACIONES
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="unidades-tab" data-bs-toggle="tab" data-bs-target="#unidades" type="button" role="tab" aria-controls="unidades" aria-selected="true">
                                UNIDADES DIDÁCTICAS <?php echo date("Y"); ?>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="horario-tab" data-bs-toggle="tab" data-bs-target="#horario" type="button" role="tab" aria-controls="horario" aria-selected="true">
                                HORARIO 2024
                            </button>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" id="myTabContent">
                        <!-- DESCRIPCIÓN-->
                        <div class="tab-pane  fade show active" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                            <p>Descripción</p>

                        </div>
                        <!-- PLAN DE ESTUDIOS -->
                        <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                            <p>Contenido de la pestaña plan de estudios.</p>
                        </div>

                        <!-- PERFIL DE EGRESO -->
                        <div class="tab-pane fade" id="perfil-egreso" role="tabpanel" aria-labelledby="perfil-egreso-tab">
                            <div>
                                <h2 class="border-titulo">Perfil de egreso</h2>
                                <p class="text-justify">
                                    El profesional técnico en Administración de Redes y Comunicaciones brinda asistencia a nivel operativo y funcional en los sistemas o servicios de TI, realizando la puesta en producción, implementación, configuración y administración de la infraestructura de redes y servicios de comunicaciones, teniendo en cuenta las políticas de seguridad de acuerdo a los roles y perfiles de los colaboradores de la organización y a la planificación efectuada. Así mismo se comunica de manera clara e interactúa con otras personas en contextos sociales y laborales, empleando el idioma inglés, operando las herramientas informáticas de las TIC, demostrando principios éticos en la solución de problemas de acuerdo a la necesidad del sector productivo y educativo, aplicando el emprendimiento y la innovación, en el ámbito personal, profesional y laboral.
                                </p>
                                <h2>Competencias</h2>
                                <h5 class="fw-bold">Competencias específicas (UNIDAD DE COMPETENCIA)</h5>
                                <ul>
                                    <li class="text-justify">
                                        Atender requerimientos, incidentes y problemas de primer nivel, asimismo brindar asistencia a nivel operativo y funcional en la etapa de puesta en marcha de los sistemas o servicios de TI, según los procedimientos internos de atención, diseño del sistema o servicios, plan de implantación y buenas prácticas de TI.
                                    </li>
                                    <li class="text-justify">
                                        Ejecutar acciones de monitoreo y otras acciones operativas programadas, de acuerdo a las buenas prácticas de aseguramiento de operación del CPD y salvaguarda de la información del negocio.
                                    </li>
                                    <li class="text-justify">
                                        Realizar la puesta en producción de los sistemas de información o servicios de TI, de acuerdo a la planificación efectuada.
                                    </li>
                                    <li class="text-justify">
                                        Implementar y configurar las redes y servicios de comunicaciones efectuando las pruebas y certificaciones, de acuerdo a las necesidades del negocio, estándares internacionales de TI y políticas de seguridad de la organización.
                                    </li>
                                    <li class="text-justify">
                                        Administrar la infraestructura de redes y servicios de comunicaciones, de acuerdo a las necesidades del negocio, estándares internacionales de TI y políticas de seguridad de la organización.
                                    </li>
                                    <li class="text-justify">
                                        Implementar y configurar la seguridad en el acceso a los servicios de redes y comunicaciones, de acuerdo a los roles y perfiles de los colaboradores internos, externos, asociados y clientes de la organización y políticas de seguridad.
                                    </li>
                                </ul>
                                <h5 class="fw-bold">
                                    Competencias para la empleabilidad
                                </h5>
                                <ul>
                                    <li class="text-justify">
                                        <b>Comunicación efectiva.- </b>Expresar de manera clara conceptos, ideas, sentimientos, hechos y opiniones en forma oral y escrita para comunicarse e interactuar con otras personas en contextos sociales y laborales diversos.

                                    </li>
                                    <li class="text-justify">
                                        <b>Inglés.-</b> Comprender y comunicar ideas, cotidianamente, a nivel oral y escrito, así como interactuar en diversas situaciones en idioma inglés, en contextos sociales y laborales.

                                    </li>
                                    <li class="text-justify">
                                        <b>Tecnologías de la Información.- </b>Manejar herramientas informáticas de las TIC para buscar y analizar información, comunicarse y realizar procedimientos o tareas vinculados al área profesional, de acuerdo con los requerimientos de su entorno laboral.

                                    </li>
                                    <li class="text-justify">
                                        <b>Ética.-</b> Establecer relaciones con respecto y justicia en los ámbitos personal, colectivo e institucional, contribuyendo a uuna convivencia democrática, orientada al bien común que considere la diversidad y dignidad de las personas, teniendo en cuenta las consideraciones aplicadas en su contexto laboral.

                                    </li>
                                    <li class="text-justify">
                                        <b>Solución de Problemas.- </b>Identificar situaciones complejas para evaluar posibles soluciones, aplicando un conjunto de herramientas flexibles que conlleven a la atención de una necesidad.

                                    </li>
                                    <li class="text-justify">
                                        <b>Innovación.- </b>Desarrollar procedimientos sistemáticos enfocados en la mejora significativa u original de un proceso, producto o servicio respondiendo a un problema, una necesidad o una oportunidad del sector productivo y educativo, el IES y la sociedad.

                                    </li>
                                    <li class="text-justify">
                                        <b>Emprendimiento.-</b> Identificar nuevas oportunidades de proyectos o negocios que generen valor y sean sostenibles, gestionando recursos para su funcionamiento con creatividad y ética, articulando acciones que permitan desarrollar innovaciones en la creación de bienes y/o servicios, así como en procesos o productos ya existentes.

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- CERTIFICADOS MODULARES-->
                        <div class="tab-pane fade" id="modulos" role="tabpanel" aria-labelledby="modulos-tab">
                            <div class="table-responsive">
                                <h2>Certificados por cada modulo profesional</h2>
                                <table class="table table-light table-responsive small">
                                    <thead>
                                        <tr>
                                            <th>Certificado</th>
                                            <th>Nombre de Módulo</th>
                                            <th>Descripción</th>
                                            <th>Duración</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th rowspan="2"><img src="./assets/img/programas/administracion/certificado1.webp" alt="certificado-mp01" class="img-fluid" width="300px"></th>
                                            <td class="fw-bold" rowspan="2">MÓDULO 1: SOPORTE TECNICO DE TECNOLOGÍA DE LA INFORMACIÓN Y COMUNICACIÓN</td>
                                            <td>Administrar, gestionar e implementar, el servicio de mantenimiento y operatividad de los recursos de hardware y software, redes de comunicación y los lineamientos y políticas de seguridad de la información, teniendo en cuenta los criterios y estándares vigentes.</td>
                                            <td>----</td>
                                        </tr>
                                        <tr>
                                            <td>Experiencias formativas en situaciones reales de trabajo (ESRT)</td>
                                            <td>128hrs.</td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><img src="./assets/img/programas/administracion/certificado1.webp" alt="certificado-mp02" class="img-fluid" width="300px"></th>
                                            <td class="fw-bold" rowspan="2">MÓDULO 2: DISEÑO Y CONSTRUCCIÓN DE SOFTWARE</td>
                                            <td>----------.</td>
                                            <td>----</td>
                                        </tr>
                                        <tr>
                                            <td>Experiencias formativas en situaciones reales de trabajo (ESRT)</td>
                                            <td>128hrs.</td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><img src="./assets/img/programas/administracion/certificado1.webp" alt="certificado-mp03" class="img-fluid" width="300px"></th>
                                            <td class="fw-bold" rowspan="2">MÓDULO 3: TESTEO Y PUESTA EN PRODUCCIÓN DE LOS SISTEMAS SOFTWARE YSERVICIOS DE TI</td>
                                            <td>--------</td>
                                            <td>---</td>
                                        </tr>
                                        <tr>
                                            <td>Experiencias formativas en situaciones reales de trabajo (ESRT)</td>
                                            <td>128hrs.</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#popUp-pdf" onclick="verPDF('./assets/docs/itinerarios/Itinerario-formativo-ARC.pdf', 'Itinerario Formativo ARC')">
                                                    <i class="fa fa-file-pdf-o"></i> VER
                                                </button>
                                            </th>
                                            <td colspan="2">Itinerario Formativo</td>
                                            <td><button class="btn btb-sm btn-default"><a download="Itinerario Formativo ARC" href="./assets/docs/itinerarios/Itinerario-formativo-ARC.pdf"><i class="fa fa-download"></i> Descargar</a></button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!--unidades didácticas-->
                        <div class="tab-pane fade" id="unidades" role="tabpanel" aria-labelledby="unidades-tab">
                            <h2>Unidades didácticas</h2>
                            <!-- Nav tabs unidades didácticas -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab-I" data-bs-toggle="tab" data-bs-target="#content-I" type="button" role="tab" aria-controls="content-I" aria-selected="true">I</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-II" data-bs-toggle="tab" data-bs-target="#content-II" type="button" role="tab" aria-controls="content-II" aria-selected="false">II</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-III" data-bs-toggle="tab" data-bs-target="#content-III" type="button" role="tab" aria-controls="content-III" aria-selected="false">III</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-IV" data-bs-toggle="tab" data-bs-target="#content-IV" type="button" role="tab" aria-controls="content-IV" aria-selected="false">IV</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-V" data-bs-toggle="tab" data-bs-target="#content-V" type="button" role="tab" aria-controls="content-V" aria-selected="false">V</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-VI" data-bs-toggle="tab" data-bs-target="#content-VI" type="button" role="tab" aria-controls="content-VI" aria-selected="false">VI</button>
                                </li>
                            </ul>

                            <!-- Tab content -->
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="content-I" role="tabpanel" aria-labelledby="tab-I">
                                    <div>
                                        <h4>Primer periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Sistemas operativos</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Gestión de requerimientos e inventarios</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Didáctica en el uso de recursos informáticos</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Soporte técnico de Hardware y Software</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Matemática para la gestión de sistemas de información</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">64 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Gestión de problemas y del conocimiento para el soporte de TI</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>7</th>
                                                        <td>Comunicación oral</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>8</th>
                                                        <td>Aplicaciones en internet</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="content-II" role="tabpanel" aria-labelledby="tab-II">
                                    <div>
                                        <h4>Segundo periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Diseño y arquitectura de centros de procesamiento de datos</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Monitoreo de incidencias y reporte de complimiento</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Modelado de procesos del negocio</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Mantenimiento y reparación de equipos de cómputo</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">64 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Gestión de operación y mantenimiento de TI</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Interpretación y producción de textos</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>7</th>
                                                        <td>Ofimática</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="content-III" role="tabpanel" aria-labelledby="tab-III">
                                    <div>
                                        <h4>Tercer periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Administración de servicios de TI</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Sistema de cableado</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Redes para los servicios de TI</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Administración de bases de datos</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">64 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Fundamentos de programación</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Gestión de problemas en los servicios de TI</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>7</th>
                                                        <td>Ingles para la comunicación oral</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>8</th>
                                                        <td>Fundamentos de innovación tecnológica</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="content-IV" role="tabpanel" aria-labelledby="tab-IV">
                                    <div>
                                        <h4>Cuarto periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Virtualización de servicios e infraestructura de red</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Monitorización y análisis del tráfico de datos</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Configuración de enrutamiento y conmutación de redes</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Aplicaciones y servicios web</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">64 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Certificación de los sistemas de cableado</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Gestión de redes</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>7</th>
                                                        <td>Comprensión y redacción en ingles</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>8</th>
                                                        <td>Innovación tecnológica</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="content-V" role="tabpanel" aria-labelledby="tab-V">
                                    <div>
                                        <h4>Quinto periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Diseño y automatización de redes</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Operaciones en ciberseguridad en redes de comunicación</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Implementación de redes escalables</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Monitorización de redes convergentes</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">64 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Evaluación y mantenimiento de infraestructura de red</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Solución de problemas (SCRUM)</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>7</th>
                                                        <td>Oportunidades de negocios</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="content-VI" role="tabpanel" aria-labelledby="tab-VI">
                                    <div>
                                        <h4>Sexto periodo académico</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>NOMBRE DE UNIDAD DIDÁCTICA</th>
                                                        <th class="text-center">CRÉDITOS</th>
                                                        <th class="text-center">HORAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Computación en la nube</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">80 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>Seguridad de servicios de TIC</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Gestión de proyectos de TIC</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">96 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>Gestión de infraestructura de TIC</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Comportamiento ético</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                    <tr>
                                                        <th>6</th>
                                                        <td>Plan de negocios</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">48 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="horario" role="tabpanel" aria-labelledby="horario-tab">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Horario 2024-I</h2>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#popUp-horario" onclick="verPDF('./assets/docs/horarios/Horario-2024-1-ARC-IEGB.pdf', 'Horario 2024-I ARC - IEGB')">
                                    <i class="fa fa-file-pdf-o"></i> VER HORARIO 2024-I
                                </button>
                            </div>
                            <div>
                                <p class="small">
                                    El horario de clases pertenece al turno tarde.
                                    <br>
                                    Siendo la jornada académica de Lunes a Viernes de 13:50 a 18:40 horas.
                                </p>
                                <table class="table table-bordered text-center small">
                                    <thead>
                                        <tr>
                                            <th rowspan="1" class="tdceldatitulo">HORAS</th>
                                            <th colspan="5" class="tdceldatitulo">DISTRIBUCIÓN DE HORAS DE LUNES A VIERNES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>1º</h6>
                                            </td>
                                            <td>13:50 - 14:35</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>2º</h6>
                                            </td>
                                            <td>14:25 - 15:20</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>3º</h6>
                                            </td>
                                            <td>15:20 - 16:05</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>4º</h6>
                                            </td>
                                            <td>16:05 - 16:50</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">
                                                <h6 class="small">RECESO</h6>
                                            </td>
                                            <td class="bg-light">16:50 - 17:10</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>5º</h6>
                                            </td>
                                            <td>17:10 - 17:55</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>6º</h6>
                                            </td>
                                            <td>17:55 - 18:40</td>
                                        </tr>
                                    </tbody>
                                </table>
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