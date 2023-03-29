<!-- PHP INCLUDES -->

<?php

include "connect.php";
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

?>

<!-- HOME SECTION -->

<section class="home-section" id="home-section">
    <div class="home-section-content">
        <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-section-carousel" data-slide-to="1"></li>
                <li data-target="#home-section-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- FIRST SLIDE -->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- SECOND SLIDE -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/barbershop_image_2.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- THIRD SLIDE -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/barbershop_image_3.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- PREVIOUS & NEXT -->
            <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previo</span>
            </a>
            <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->

<section id="about" class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content" style="text-align: center;">
                    <h3>Estamos para ti</h3>
                    <h2>Somos tu Peluquería <br>Desde 1982</h2>
                    <img src="Design/images/about-logo.png" alt="logo">
                    <p style="color: #777">
                        Somos una peluquería enfocada en nuestros clientes, antes de empezar analizamos tu fisonomía para recomendarte tu mejor corte.
                        Como siempre respetando como máxima tu criterio, tus gustos y preferencias ante todos.
                    </p>
                    <a href="#" class="default_btn" style="opacity: 1;">Más acerda de nosotros</a>
                </div>
            </div>
            <div class="col-md-6  d-none d-md-block">
                <div class="about_img" style="overflow:hidden">
                    <img class="about_img_1" src="Design/images/about-1.jpg" alt="about-1">
                    <img class="about_img_2" src="Design/images/about-2.jpg" alt="about-2">
                    <img class="about_img_3" src="Design/images/about-3.jpg" alt="about-3">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->

<section class="services_section" id="services">
    <div class="container">
        <div class="section_heading">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Servicios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Cortes de Cabello</h3>
                    <p>Los mejores cortes de cabellos adaptados a la fixonomía de tu cara</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Corte de Barba</h3>
                    <p>Nos ajustamos a tu barba, te damos los mejores consejos posibles.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Afeitado Suave</h3>
                    <p>Incluimos un tratamiento, de cremas y balsamos que cuidan tu piel.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Mascarilla Facial</h3>
                    <p>Aplicamos los mejores tratamiento, para cuidar tu piel y humectarla</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOKING SECTION -->

<section class="book_section" id="booking">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                    <div class="book_content">
                        <h2 style="color: white;">Reserva tu Cita</h2>
                        <p style="color: #999;">
                            En unos sencillos pasos, solo elige la fecha <br>y podrás reservar tu cita sin problemas.
                        </p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 padding-10">
                            <input type="time" class="form-control">
                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->

                    <button id="app_submit" class="default_btn" type="submit">
                        Reserva tu Cita
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->

<section class="gallery-section" id="gallery">
    <div class="section_heading">
        <h3>Somos tu Peluquería</h3>
        <h2>Nuestros Clientes Felices</h2>
        <div class="heading-line"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-1.jpg');"> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-2.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-3.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-4.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-5.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-6.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-7.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-8.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->

<section id="team" class="team_section">
    <div class="container">
        <div class="section_heading ">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Peluqueros</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-1.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-2.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-3.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-4.jpg" alt="Team Member">
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- REVIEWS SECTION -->

<section id="reviews" class="testimonial_section">
    <div class="container">
        <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#reviews-carousel" data-slide-to="1"></li>
                <li data-target="#reviews-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- REVIEW 1 -->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Te ofrecemos la mejor experiencia</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- REVIEW 2 -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Te ofrecemos la mejor experiencia</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- REVIEW 3 -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Te ofrecemos la mejor experiencia</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- PREVIOUS & NEXT -->
            <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previo</span>
            </a>
            <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</section>

<!-- PRICING SECTION  -->

<section class="pricing_section" id="pricing">

    <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

    <?php

    $stmt = $con->prepare("Select * from service_categories");
    $stmt->execute();
    $categories = $stmt->fetchAll();

    ?>

    <!-- END -->

    <div class="container">
        <div class="section_heading">
            <h3>Somos tu mejor opción</h3>
            <h2>Nuestros Precios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <?php

            foreach ($categories as $category) {
                $stmt = $con->prepare("Select * from services where category_id = ?");
                $stmt->execute(array($category['category_id']));
                $totalServices =  $stmt->rowCount();
                $services = $stmt->fetchAll();

                if ($totalServices > 0) {
            ?>

                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <h3><?php echo $category['category_name'] ?></h3>
                            <ul class="price_list">
                                <?php

                                foreach ($services as $service) {
                                ?>

                                    <li>
                                        <h4><?php echo $service['service_name'] ?></h4>
                                        <p><?php echo $service['service_description'] ?></p>
                                        <span class="price">$<?php echo $service['service_price'] ?></span>
                                    </li>

                                <?php
                                }

                                ?>

                            </ul>
                        </div>
                    </div>

            <?php
                }
            }

            ?>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->

<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                        Si tienes alguna duda
                        <br>envianos un mensaje hoy!
                    </h2>
                    <p>
                        Estamos muy pendientes de nuestros clientes y sus consultas o sugerencias son muy importantes para nosotros.
                    </p>
                    <h3>
                        Calle 90 N 23 24
                        <br>
                        Cali, Colombia
                    </h3>
                    <h4>
                        <span style="font-weight: bold">Email:</span>
                        hola@configuroweb.com
                        <br>
                        <span style="font-weight: bold">Phone:</span>
                        +57 316 243 00 81
                        <br>
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Correo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="contact_send" class="default_btn">Enviar tu mensaje</button>
                            </div>
                        </div>
                        <img src="Design/images/ajax_loader_gif.gif" id="contact_ajax_loader" style="display: none">
                        <div id="contact_status_message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WIDGET SECTION / FOOTER -->

<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <img src="Design/images/barbershop_logo.png" alt="Brand">
                    <p>
                        Somos tu mejor opción, nuestro mayor capital tu comodidad y satisfacción
                    </p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Dirección</h3>
                    <p>
                        Calle 90 N 23 24
                    </p>
                    <p>
                        hola@configuroweb.com
                        <br>
                        (+57) 316 243 00 81
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>
                        Horarios Disponibles
                    </h3>
                    <ul class="opening_time">
                        <li>Lunes - Viernes 11:30am - 2:00 - 8:00 pm</li>
                        <li>Lunes - Viernes 11:30am - 2:00 - 8:00 pm</li>
                        <li>Lunes - Viernes 11:30am - 2:00 - 8:00 pm</li>
                        <li>Lunes - Viernes 11:30am - 2:00 - 8:00 pm</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Subscribete a nuestro contenido</h3>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Tu correo...">
                            <button type="submit" class="submit">Suscríbete</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER  -->

<?php include "./Includes/templates/footer.php"; ?>