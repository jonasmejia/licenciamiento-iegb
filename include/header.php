<header class=" mt-4"><!-- style="border-bottom:10px  solid white;"-->

    <div class="container-fluid my-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="" href="/">
                        <img src="./assets/img/logo-iegb-index-.webp" alt="" width="400px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--navbar-->
    <div class="container-fluid" style="background-color:  #003366;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark pt-3" aria-label="Twelfth navbar example"><!--bg-body-tertiary -->
                <div class="container-fluid">
                    <button class="navbar-toggler my-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center pb-2" id="navbarsExample10">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo $menu=="home"?" menu-active":""; ?> text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-building-columns"></i> Nosotros</a>
                                <div class="dropdown-menu" style="width: 550px; overflow: hidden; ">
                                    <div class="row">

                                        <div class="col-lg-5">
                                            <h5 class="ml-4 fw-bold  d-none d-md-block d-lg-block d-xl-block" style="margin-left:15px; margin-bottom:20px"><span class="borde-texto-menu">Nosotros </span></h5>
                                            <ul class="list-group">
                                                <li><a class="dropdown-item" href="#">Misión y visión</a></li>
                                                <li><a class="dropdown-item" href="#">Nuestros simbolos</a></li>
                                                <li><a class="dropdown-item" href="#">Plana jerárquica</a></li>
                                                <li><a class="dropdown-item" href="#">Plana docente</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 pb-4 d-none d-md-block d-lg-block d-xl-block" style="border-left:5px solid #003366;">
                                            <h6 class="titulo-color fw-bold">Nuestra institución</h6>
                                            <div class="text-center col-lg-12">
                                                <img src="./assets/img/nosotros/iegb_cover.jfif" alt="" class="img-fluid rounded pb-2">
                                                <i class="small"> <?php echo (date("Y") - 1980); ?> años al servicio de la educación.</i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo $menu=="programas"?" menu-active":""; ?>  text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars-progress"></i> Programas de estudios</a>
                                <div class="dropdown-menu" style="width: 850px; overflow: hidden; ">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <h5 class="ml-4 fw-bold  d-none d-md-block d-lg-block d-xl-block" style="margin-left:15px; margin-bottom:20px"><span class="borde-texto-menu">Nuestros <span class="titulo-color ">programas de</span> estudios</span></h5>
                                            <ul class="list-group">
                                                <li><a class="dropdown-item" href="../administracion-de-redes.php">Administración de redes y comunicaciones</a></li>
                                                <li><a class="dropdown-item" href="#">Contabilidad</a></li>
                                                <li><a class="dropdown-item" href="#">Electrónica industrial</a></li>
                                                <li><a class="dropdown-item" href="#">Electrotecnia industrial</a></li>
                                                <li><a class="dropdown-item" href="#">Enfermería técnica</a></li>
                                                <li><a class="dropdown-item" href="#">Farmacia técnica</a></li>
                                                <li><a class="dropdown-item" href="#">Guía oficial de turismo</a></li>
                                                <li><a class="dropdown-item" href="#">Producción agropecuaria</a></li>
                                                <li><a class="dropdown-item" href="#">Mecatrónica Automotriz</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 pb-4 d-none d-md-block d-lg-block d-xl-block">

                                            <img src="./assets/img/nosotros/iegb_cover.jfif" alt="" class="img-fluid rounded">
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-file-lines"></i>  Admisión y matrículas</a>
                                <div class="dropdown-menu" style="width: 700px; overflow: hidden; ">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <ul class="list-group">
                                                <li><a class="dropdown-item" href="#">Admisión</a></li>
                                                <li><a class="dropdown-item" href="#">Proceso de matrícula</a></li>
                                                <li><a class="dropdown-item" href="#">Becas y créditos educativos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 pb-4 d-none d-md-block d-lg-block d-xl-block" style="border-left:5px solid #003366;">
                                            <h6 class="titulo-color fw-bold">Nuestra institución</h6>
                                            <img src="./assets/img/nosotros/iegb_cover.jfif" alt="" class="img-fluid rounded">
                                        </div>
                                    </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-magnifying-glass"></i> Transparencia</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">TUPA</a></li>
                                    <li><a class="dropdown-item" href="#">Documentos de gestión</a></li>
                                    <li><a class="dropdown-item" href="#">Estadísticas</a></li>
                                    <li><a class="dropdown-item" href="#">Inversiones y recursos económicos</a></li>
                                    <li><a class="dropdown-item" href="#">Libro de reclamaciones</a></li>
                                    <li><a class="dropdown-item" href="#">Licenciamiento</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-regular fa-handshake"></i> Servicios</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Biblioteca virtual</a></li>
                                    <li><a class="dropdown-item" href="#">Servicios complementarios</a></li>
                                    <li><a class="dropdown-item" href="#">Bolsa laboral</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Contacto</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Otros</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Links institucionales</a></li>
                                    <li><a class="dropdown-item" href="#">Noticias</a></li>
                                    <li><a class="dropdown-item" href="#">Eventos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>