<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Sitio Web A-Romanos</title>

    <meta property="og:image" content="https://aromanos.co/images/logo.png">
    <meta name="description" content="Sitio web A-Romanos">

    <meta property="og:site_name" content="A-Romanos">
    <meta property="og:locale" content="es_CO">

    <meta name="application-name" content="A-Romanos">
    <meta name="apple-mobile-web-app-title" content="A-Romanos">

    <meta name="google-site-verification" content="P2KxUQvvuDeVdKeYbD3nk4KNa2z4n2jDgWixm-IE9r0" />

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel=”canonical” href="https://aromanos.co/"/>
    <link rel="shortcut icon" href="https://aromanos.co/images/logo.png"/>

</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-light" id="mainNav">
        <div class="container">

            <img class="rounded-circle img-fluid" src="/images/logo.png" width="50" height="50">

            <a class="navbar-brand" href="#page-top" style="color: var(--blue);">A-Romanos</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">Producto</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Características</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Acerca</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a></li>

                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a class="btn btn-primary rounded-pill" href="<?php echo e(url('/home')); ?>">Ingresar</a>
                        <?php else: ?>
                            <a class="btn btn-primary rounded-pill btn-ml" href="<?php echo e(route('login')); ?>">Ingresar</a>
                        <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>A-ROMANOS</span></div>
                <div class="intro-heading text-uppercase"><span>Servicio de Facturación Personalizada</span>
            </div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#productos">Conoce más</a>
            </div>
        </div>
    </header>

    <section id="productos">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Producto</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card clean-testimonial-item border-0 rounded-0">
                        <div class="card-body">
                            <p class="card-text text-muted section-subheading" style="text-align: justify;"><b>A-Romanos®</b> le ofrece el servicio de arriendo o alquiler del software, para el manejo
                            defacturación personalizada,es la mejor opción para la optimización de los procesos llevados a cabo en su organización, pues le permite realizar cada uno de sus
                            procesos desde cualquier lugar del mundo, además es la Única aplicación Web que puede adaptarse al modelo en la nube para que este preparado para la siguiente
                            generación de aplicaciones, presentando informes comparativos y en adaptación y siempre puede contar con su información en tiempo real.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card clean-testimonial-item border-0 rounded-0">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">¿Que Ofrecedos?</h4>
                            <p class="card-text text-muted section-subheading" style="text-align: justify;"><b>A-Romanos®</b> es una aplicación Web, diseñada con tecnologías innovadoras, con grandes
                            ventajas para su organización que le permitirán llevar procesos de facturación y gestión de las diferentes operaciones de su empresa, modularmente estructurado y adaptable a sus
                            necesidades de información. Está diseñado para trabajar desde la nube y en modo multiusuario con asignación jerárquica de privilegios de acceso, controlando de esta forma
                            el acceso a la información, integrando cada uno de los procesos institucionales de manera ágil y eficiente garantizando de esta manera la fluidez y seguridad de la información,
                            registrar todos sus procesos como Facturación, Ingreso de lecturas, Gestión de Pagos, Contabilidad, Backups en la Nube y muchas más.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card clean-testimonial-item border-0 rounded-0">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">¿Que Realizamos?</h4>
                            <p class="card-text text-muted section-subheading" style="text-align: justify;">A través de nuestro software, dispone de un centro de control de acceso y asignación de
                            niveles de acceso a usuarios. Puede incorporar al sistema fácilmente su estructura organizacional y de acuerdo a ella, asignar o delegar actividades e inclusive acceso parcial a
                            las funcionalidades del sistema. Por ejemplo una unidad funcional del sistema es el de registro de la información (Facturación, Matriculas, Ingreso de lecturas, gestión de pagos,
                            Financiación, Estadísticas, Graficas etc.) Múltiples usuarios pueden acceder a cada una de las funcionalidades, pero uno puede tener privilegios exclusivamente para consultar
                            información y otro si podrá elaborarlas, pero no podrá por ejemplo cambiar valores a menos de que disponga de los privilegios otorgados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Características</h2>
                    <h3 class="text-muted section-subheading">A-Romanos te permite una administración integral.</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/1-estilos_colores_y_fuentes.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Estilos, Colores y Fuentes</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/2-menus_amigables.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Menús Claros y Amigables</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/3-facturacion_personalizada.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Facturación Personalizada</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/4-usuarios_roles_y_permisos.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Usuarios, Roles y Permisos</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/5-matriculas.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gestión de Matriculas</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/6-lecturas.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gestión de Lecturas</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/7-tarifas.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tarifas Personalizada</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/8-pagos.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gestión de Pagos</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/9-sui.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>SUI</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/10-inventarios.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Inventarios y Bodegas</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/11-contabilidad.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Contabilidad</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/12-financiacion.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Financiación</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/13-soporte.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Soporte y Asistencia</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/14-backups.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Backups en la Nube y Locales</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/15-exportar.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Exportación e Importación de Datos</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">Acerca</h2>
                    <h3 class="text-muted section-subheading">
                        <b>A-Romanos</b> es una empresa seria, moderna, con personal altamente calificado que permanecen siempre investigando, innovando y creciendo para entregar
                        aplicaciones de la más alta calidad.
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Misión.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        <b>A-Romanos</b> Es una empresa dedicada a la producción, distribución y venta de
                                        sistemas de información, soluciones y servicios informáticos, apoyando sus
                                        operaciones en un equipo calificado, multidisciplinario, y comprometido con una
                                        voluntad de servicio y atención al cliente permanente.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Prospectiva.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Ser una empresa de Clase Mundial, líder en la industria del software en Colombia,
                                        de proyección Iberoamericana, gestionando sus negocios de una manera ética y
                                        profesional.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Las especialidades de A-Romanos son:</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Desarrollo de sistemas de información robustos y multiplataforma (aplicacionespara Internet),
                                        mantenimiento preventivo y correctivo de equipos de computo, cableado estructurado (redes Alambricas e inalámbricas, Intranet.)
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Para A-Romanos</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Lo más importante es el cliente y por eso como valor agregado, brinda la más sincera asesoría que puede Usted tener en materia de
                                        tecnología y Sistemas de Información. Esperamos que Usted encuentre en A-Romanos una Empresa sólida y dinámica que ofrece Aplicaciones de alta
                                        calidad.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <h4>Se parte<br>&nbsp;de nuestra<br>&nbsp;historia!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/1.jpg">
                        <h4>Maria Fernanda Muñoz B.</h4>
                        <p class="text-muted">Diseñador Encargado</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/2.jpg">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                -->
                <div class="col-sm-6">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/3.jpg">
                        <h4>Israel Arbona Guerrero</h4>
                        <p class="text-muted">Desarrollador Principal</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/creative-market.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/designmodo.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/envato.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/themeforest.jpg"></a></div>
            </div>
        </div>
    </section>

    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="alert" style="display:none"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">CONTÁCTENOS</h2>
                    <h3 class="text-muted section-subheading">¡Ingresa tus datos para conocer mas sobre nuestra propuesta!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="sf_form" name="contactForm" action="javascript:void(0)" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" name="nombre" placeholder="Su nombre *"></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" name="correo" placeholder="Tu correo electrónico *"></div>
                                <div class="form-group"><input class="form-control" type="tel" name="telefono" placeholder="Su Teléfono *"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" name="comentario" placeholder="Tu Mensaje *"></textarea></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase sf_guardarC"
                                data-remote="<?php echo e(route('contactanos-correo')); ?>" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Arbona Soluciones 2022</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Política de privacidad</a></li>
                        <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Estilo, Colores y Fuentes</h2>
                                <p class="text-muted item-intro">Permite una vista actual de acuerdo al gusto o necesidad de cada usuario combinando colores,
                                    tipos y tamaños de letras según los modelos predeterminados de A-Romanos Software.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1-full_estilos_colores_y_fuentes.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Menús Claros y Amigables</h2>
                                <p class="text-muted item-intro">Menús amigables, que le permitirá navegar por el programa de una manera muy fácil e
                                    ingresar simultáneamente a diferentes documentos e informes sin tener que salir de la
                                    aplicación actual. Pantallas y formularios totalmente configurables, utilizando el 100% de su
                                    pantalla.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2-full_menus_amigables.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Facturación Personalizada</h2>
                                <p class="text-muted item-intro">Generación de facturación personalizada teniendo en cuenta la tarifa aplicada según la
                                    resolución, tiene en cuenta los subsidios y contribuciones, manejo de servicios AAA.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3-full_facturacion_personalizada.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Usuarios, Roles y Permisos</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite crear y configurar usuarios de acuerdo a los cargos de la organización
                                    y nivel de responsabilidad, haciendo uso de los roles predeterminados y
                                    configurando los permisos para acceder o limitar el ingreso a documentos, informes o
                                    interfaces del programa.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4-full_usuarios_roles_y_permisos.jpg">
                                    <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Gestión de Matrículas</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite crear, modificar e eliminar cada uno de los suscriptores con toda la información
                                    correspondiente a la matrícula además realizar excepciones de servicios ya sea acueducto, alcantarillado como aseo.  </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5-full_matriculas.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Ingreso de Lecturas</h2>
                                <p class="text-muted item-intro">Permite el ingreso de lecturas de los suscriptores desde cualquier dispositivo móvil que automáticamente
                                    se ve reflejado en el sistema principal.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6-full_lecturas.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal7">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Tarifas Personalizada</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite crear y configurar las tarifas de los servicios de acueducto, alcantarillado y aseo
                                    de acuerdo a los estudios realizados por la organización.
                                    Igualmente admite el usu de subsidios y contribuciones manejo de la escala en cuanto a metros.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/7-full_tarifas.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal8">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Gestión de Pagos</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite crear, modificar y eliminar cada una de las facturas según el periodo facturado control de puntos de pagos.
                                    Igualmente admite el usu de lector de barras facilitando el ingreso de cada una de las facturas.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/8-full_pagos.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal9">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">SUI</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite crear los informes de acueducto, alcantarillado y aseo según el Sistema Único de Información(SUI).</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/9-full_sui.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal10">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Inventarios y Bodegas</h2>
                                <p class="text-muted item-intro">A-Romanos® le permite el control de inventario para todos los módulos necesarios para la
                                    administración de los procesos relacionados con el inventario de las sucursales, como registro de datos de proveedores,
                                    artículos, ingreso y salida de mercadería, todo lo requerido para el uso óptimo de la herramienta.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/10-full_inventarios.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal11">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Contabilidad</h2>
                                <p class="text-muted item-intro">A-Romanos® permite el manejo de notas contables y comprobantes de ingresos y egresos.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/11-full_contabilidad.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal12">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Financiación</h2>
                                <p class="text-muted item-intro">A-Romanos® permite el manejo de financiar las facturas vencidad de servicios.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/12-full_financiacion.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal13">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Soporte y Asistencia</h2>
                                <p class="text-muted item-intro">Se realiza asistencia a nuestros usuarios por medio de Soporte Telefónico, Soporte Remoto
                                    o Soporte presencial si así lo requieren.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/13-full_soporte.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal14">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Backups en la Nube y Locales</h2>
                                <p class="text-muted item-intro">    Permite guardar copias de seguridad en una ubicación externa en Internet o en su equipo de
                                    forma automática, brindando seguridad de su información. En caso de pérdida, robo de su
                                    computador, daño físico o cualquier evento, se recupera la copia de la nube y se restaura en
                                    su servidor local.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/14-full_backups.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal15">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Exportación e Importación de Datos</h2>
                                <p class="text-muted item-intro">Todas las interfaces y pantallas en A-Romanos Software® le permiten hacer la
                                    exportación a formatos como Microsoft Excel, PDF, XPS de forma sencilla y rápida.
                                    También le permite la importación de grandes volúmenes de información de una manera
                                    sencilla.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/15-full_exportar.jpg">
                                <p></p>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos/resources/views/welcome.blade.php ENDPATH**/ ?>