<footer class="container-fluid" style="background-color: #003366;">
    <div class="row">
        <div class="col-4  border-top mx-auto"></div>
    </div>
    <div class="container" style="padding-top: 80px;">


        <div class="row">
            <!--Logo-->
            <div class="col-md-3 mb-3"> <!--offset-md-1-->
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="./assets/img/logo-iegb-cargando.webp" alt="logo iegb" class="img-fluid p-2 w-75">
                </div>
            </div>

            <!--Libro de reclamaciones-->
            <div class=" col-md-4 mb-3">
                <h5 class="text-white">Libro de Reclamaciones</h5>
                <div class="row align-items-center">
                    <div class="mx-auto col-2 ">
                        <i class="fa-solid fa-book-open fa-2x text-white"></i>
                    </div>
                    <div class=" col-10">
                        <p class="text-white small">Para cualquier queja o sugerencia, por favor visita nuestro <a href="#" class="link-info">Libro
                                de Reclamaciones</a>.</p>
                        <ul class="list-unstyled">
                            <li class="nav-item mb-2"><a href="#" class="btn btn-sm btn-primary w-100">
                                    <i class="fa-regular fa-hand-point-up"></i> Registrar reclamación</a></li>
                        </ul>

                    </div>
                </div>


            </div>
            <!--Contáctanos-->
            <div class="col-md-5  mb-3"> <!--offset-md-1-->
                <h5 class="text-white">Contacto</h5>
                <ul class="list-unstyled small">
                    <li class="pb-2 text-white"><i class="fa-solid fa-location-dot text-white"></i> Av. Tecnológico
                        N° 182 -
                        Barrio Shancayan - Huaraz -
                        Ancash</li>
                    <li class="pb-2 text-white"><a href="https://wa.me/1234567890?text=Hola%20me%20gustaría%20obtener%20más%20información" class="text-decoration-none text-white" target="_blank" title="Escribir mensaje al WhatsApp"><i class="fa-brands fa-whatsapp text-white"></i> +51 920 253 878</a>
                    <li class="pb-2 text-white"><a href="tel:+51920253878" class="text-decoration-none text-white" title="LLamar"><i class="fa-solid fa-phone-volume text-white"></i>  043 422572 </a>
                    </li>
                    <li class="text-white"><a href="mailto:informes@iegb.edu.pe" class="text-decoration-none text-white" title="Enviar correo"><i class="fa-solid fa-envelope text-white"></i> informes@iegb.edu.pe</li>
                </ul>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between pb-2 pt-5 mt-4 border-top border-secondary">
            <p class="text-white small">Copyright © <?php echo date("Y"); ?> IESTP Eleazar Guzmán Barrón<br>
                <span class="small">Desarrollado por el equipo de soporte informático del IESTP EGB</span>
            </p>
            <ul class="list-unstyled d-flex" style="margin-top:10px;">
                <li class="ms-3">
                    <a class="link-body-emphasis" href="https://pe.linkedin.com/company/iegb" title="Acceder a Linkedin" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2x text-white"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-body-emphasis" href="https://www.facebook.com/iegb.edu.pe" title="Acceder a Facebook" target="_blank">
                        <i class="fa-brands fa-square-facebook fa-2x text-white"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-body-emphasis" href="https://www.youtube.com/@AsistenteSOPORTEIEGB" title="Acceder a YouTube" target="_blank">
                        <i class="fa-brands fa-youtube fa-2x text-white"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</footer>

<!--Botón subir arriba-->
<a href="#top" id="scrollUp" title="Ir arriba"><i class="fa-solid fa-jet-fighter-up"></i></a>

<script>
    $(document).ready(function() {

            //Boton subir arriba
            // Mostrar el botón cuando el usuario hace scroll hacia abajo 100px
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scrollUp').fadeIn();
                } else {
                    $('#scrollUp').fadeOut();
                }
            });

            // Hacer scroll suave hacia arriba cuando se hace clic en el botón
            $('#scrollUp').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 100);
            });
        });
</script>