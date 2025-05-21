<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$formMsg = "";


$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title>Popol</title>
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">

        <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

        <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script type="text/javascript" src="js/wow.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script src="contactform/contactform.js"></script>


    </head>
    <body>

        <nav class="main-nav-outer" id="test"><!--main-nav-start-->
            <div class="container">
                <ul class="main-nav">
                    <li><a class="nocolor" href="#quees">¿Qué es Popol?</a></li>
                    <li><a class="nocolor" href="#caracteristicas">¿Qué ofrece?</a></li>
                    <li class="small-logo"><a  class="nocolor" href="#header"><img src="img/small-logo.png" alt=""></a></li>
                    <li><a class="nocolor" href="#equipo">Sobre Nosotros</a></li>
                    <li><a class="nocolor" href="#contacto">Contacto</a></li>
                </ul>
                <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
            </div>
        </nav><!--main-nav-end-->


        <header class="header" id="header"><!--header-start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 hlogo">
                        <figure class="logo animated fadeInDown delay-07s">
                            <a href="#"><img src="img/logo.png" alt=""></a>	
                        </figure>
                        <h1 class="animated fadeIn delay-12s"> Crea. Comparte. Juega.</h1>
                    </div>
                </div>
            </div>
        </header><!--header-end-->



        <section class="main-section"><!--main-section-start-->
            <div class="container">
                <h2 id="quees">¿Qué es Popol?</h2>
                <h6>La revolución en el mundo de los videojuegos</h6>
                <br>
                <p class="descripcion"> ¿Alguna vez has tenido una idea para un videojuego pero 
                    no tenías ni idea de cómo llevarla a cabo? Seguramente en ese momento
                    te hayas dado cuenta de todo lo que necesitas: una gran cantidad de recursos, 
                    conocimientos en programación y mucho, mucho tiempo. Tanto las grandes
                    empresas del sector como las independientes, sufren estas enormes dificultades.
                    Popol quiere solucionar este problema.
                    <br><br>
                    Popol cuenta con una gran biblioteca de recursos, hechos por
                    personas que, al igual que tú, quieren compartir su contenido. Todo 
                    esto está al alcance de cualquiera que se una a la comunidad y así,
                    unidos/as, crear la mayor biblioteca de recursos que exista. 
                    Por último, piensa que todos los contenidos que se utilicen y produzcan dinero,
                    ¡obtendrán su parte también!
                </p>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s list">
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa-wrench"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>CREA</h3>
                                <p>Saca tu vena artística y crea aquello que siempre has soñado. Todo el contenido es bienvenido en POPOL</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa-share-alt"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>COMPARTE</h3>
                                <p>Comparte todo tu contenido e ideas y colabora a formar proyectos de otros usuarios.</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa-gamepad"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>JUEGA</h3>
                                <p>Crea tu propio videojuego apoyándote en la comunidad o disfruta de un catálogo de juegos hechos por otros usuarios.</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa-money"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>GANA DINERO</h3>
                                <p>Saca al mercado tus videojuegos o gana dinero con los recursos que has subido si estos ayudaron a otros.</p>
                            </div>
                        </div>
                    </div>
                    <figure class="col-lg-6 col-sm-6  text-right wow fadeInRight">
                        <img class="pac" src="img/comecocos.png" alt="">
                    </figure>

                </div>
            </div>
        </section><!--main-section-end-->



        <section class="main-section alabaster"><!--main-section alabaster-start-->
            <div class="container">
                <div class="row">
                    <figure class="col-lg-5 col-sm-4 wow fadeInLeft eng" id="caracteristicas">
                        <img  src="img/ruedas2.png" alt="">
                    </figure>
                    <div class="col-lg-7 col-sm-8 featured-work">
                        <h2>¿Qué ofrece?</h2>
                        <P class="padding-b">Ahora que sabes todo lo que vas a poder hacer, quiero
                            enseñarte el cómo. Popol se sostendrá bajo tres pilares:</P>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-01s">
                                <i class="fa-users"></i>
                            </div>	
                            <div class="featured-box-col2 wow fadeInRight delay-02s">
                                <h3>Comunidad de creadores de contenido</h3>
                                <p>Creadores de contenido de todo tipo se darán cita en Popol, unificando una gran masa de recursos y una extensa variedad de conocimientos. </p>
                            </div>    
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-01s">
                                <i class="fa-folder-open"></i>
                            </div>	
                            <div class="featured-box-col2 wow fadeInRight delay-02s">
                                <h3>biblioteca de recursos gratuita</h3>
                                <p>Todos los recursos de la comunidad podrán ser descargados para usar en Popol de forma gratuita. </p>
                            </div>    
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-01s">
                                <i class="fa-cogs"></i>
                            </div>	
                            <div class="featured-box-col2 wow fadeInRight delay-02s">
                                <h3>Motor gráfico</h3>
                                <p>Importa los recursos de la web en un motor gráfico facil de usar y potente. Listo para crear tus videojuegos. </p>
                            </div>    
                        </div>
                        <a class="Learn-More" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section><!--main-section alabaster-end-->

        <section class="main-section newsletter">
            <h1>¿Te gusta lo que ves?</h1>
            <p> Suscríbete y te informaremos de cualquier novedad:</p>
            <form action="registro.php" method="post" role="form" class="contactForm animated fadeIn delay-07s">
                <input type="email" class="form-control newslettermail" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Introduce un email válido" />
                <input type="submit" class="suscripcion" name="submit" value="SUSCRIBIRME">
                <div class="validation"></div>
            </form>
        </section>



        <section class="main-section team"><!--main-section team-start-->
            <div class="container">
                <h2 id="equipo">Conócenos</h2>
                <h6>El equipo de Popol</h6>
                <div class="team-leader-block clearfix">
                    <!-- Jose -->
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-03s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/Jose.png" alt="">
                            <ul>
                                <li><a href="https://www.facebook.com/jose.perezcruz.37669" class="fa-facebook"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Jose J. Pérez Cruz</h3>
                        <span class="wow fadeInDown delay-03s">Co-CEO y CIO</span>
                    </div>
                    <!-- Angel -->
                    <div class="team-leader-box">
                        <div class="team-leader  wow fadeInDown delay-03s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/Angel.png" alt="">
                            <ul>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Angel Lanzas Sierra</h3>
                        <span class="wow fadeInDown delay-03s">Co-CEO y COO</span>
                    </div>
                    <!-- Fran -->
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-06s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/Fran.png" alt="">
                            <ul>
                                <li><a href="https://www.facebook.com/fran.medina.9849?fref=ts" class="fa-facebook"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Francisco M. Medina Ruiz</h3>
                        <span class="wow fadeInDown delay-03s">CFO</span>
                    </div>
                    <!-- Cobos -->
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-06s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/Cobos.png" alt="">
                            <ul>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Jesús Cobos Muñoz</h3>
                        <span class="wow fadeInDown delay-03s">Diseñador Gráfico</span>
                    </div>
                    <!-- Jose Antonio -->
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-03s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/JoseAntonio.png" alt="">
                            <ul>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Jose A. Peláez Fuentes</h3>
                        <span class="wow fadeInDown delay-03s">CMO</span>
                    </div>
                    <!-- Marta -->
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-03s"> 
                            <div class="team-leader-shadow"><a href="#"></a></div>
                            <img src="img/Marta.png" alt="">
                            <ul>
                                <li><a href="https://www.facebook.com/marta.pez.7?fref=ts" class="fa-facebook"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">Marta Aranda Pez</h3>
                        <span class="wow fadeInDown delay-03s">Editora y traductora</span>
                    </div>
                </div>
            </div>
        </section><!--main-section team-end-->


        <section class="business-talking">
            <div class="container">
                <h2 id="contacto">Contacta con nosotros</h2>
            </div>
        </section><!--business-talking-end-->
        <div class="container">
            <section class="main-section contact" id="contact">

                <div class="row">
                    <div class="col-lg-7 col-sm-7 contactpart">
                        <div class="wow fadeInLeft flex">
                            <div>
                                <div class="contact-info-box phone clearfix">
                                    <h3><i class="fa-phone"></i>Teléfono:</h3>
                                    <p>677 18 68 14</p>
                                </div>
                                <div class="contact-info-box email clearfix">
                                    <h3><i class="fa-pencil"></i>email:</h3>
                                    <p>contacto@popol.es</p>
                                </div>
                            </div>
                            <div>
                                <ul class="social-link">
                                    <li class="twitter"><a href="https://twitter.com/popol_es"><i class="fa-twitter"></i></a></li>
                                    <li class="facebook"><a href="https://fb.me/WebPopol"><i class="fa-facebook"></i></a></li>
                            </div>
                        </div>
                        <div class="wow fadeInUp delay-05s">
                            <div class="form">


                                <form action="" method="post" role="form" class="contactForm cForm">
                                    <h3> ¿Algo que decirnos? </h3>
                                    <div class="form-group">
                                        <input type="text" name="nombre" class="form-control input-text-bi" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Introduce al menos 4 caracteres" />
                                        <div class="validation"></div>
                                        <input type="email" class="form-control input-text-bi" name="correo" id="email" placeholder="Correo" data-rule="email" data-msg="Introduce un email válido" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-text" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Introduce al menos 8 caracteres" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control input-text text-area" name="mensaje" rows="5" data-rule="required" data-msg="Escríbenos lo que quieras" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <span class="alerta" id="formMsg"></span>
                                    <div class="text-center"><button type="submit" class="input-btn">Enviar</button></div>
                                </form>

                                <?php
                                if ($nombre == "" || $correo == "" || $asunto == "" || $mensaje == "") {
                                    echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = "";</script>';
                                } else {
                                    if (!preg_match($email_exp, $correo)) {
                                        echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = "Introduce un email válido, por favor.";</script>';
                                    }else{
                                        if (!preg_match($string_exp, $nombre)) {
                                            echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = "El nombre que has introducido no es válido.";</script>';
                                        } else{ 
                                            if (strlen($mensaje) < 2) {
                                                echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = "¿Podrías decirnos algo más en el mensaje?";</script>';
                                            }else{
                                    
                                    $para = "contacto@popol.es";
                                    $msjCorreo = "Nombre: $nombre\n E-Mail: $correo\n Asunto: $asunto\n Mensaje:\n $mensaje";
                                    $cabecera = 'From: ' . $correo . "\r\n" .
                                            'Reply-To: ' . $correo . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();
                                    $envio = mail($para, $asunto, $mensaje, $cabecera);
                                    if ($envio) {
                                        echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = "Hemos recibido tu mensaje.";</script>';
                                    } else {
                                        echo '<script type="text/javascript">document.getElementById("formMsg").innerHTML = ">No hemos podido recibir tu mensaje. Inténtalo de nuevo.";</script>';
                                    }
                                }}}}
                                ?>

                            </div>	
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-5 paypal">
                        <h2>Un último favor</h2>
                        <p class="descripcion">Gracias a tu visita ya hemos conseguido crecer. Ahora,
                            ayúdanos a seguir avanzando. Necesitamos costear el desarrollo del proyecto
                            y tu apoyo es muy importante. 
                            <br><br>Haz click en el siguiente botón e introduce la cantidad que desees. 
                            Cada céntimo. Cada click. Nuestro impulso.</p>
                        <h3 id="thanks">Gracias por tu apoyo.</h3>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7U4FR59M5W4WC">
                            <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div> 
                </div>
            </section>
        </div>


        <section class="main-section client-part" id="yuzz"><!--main-section client-part-start-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="client-part-haead wow fadeInDown delay-05">Participante del programa Yuzz del banco Santander en 2017.</p>
                    </div>
                </div>
                <b class="trophy wow fadeInDown delay-03"><i class="fa-5x fa-trophy"></i></b>
            </div>
        </section><!--main-section client-part-end-->
        <div class="c-logo-part"><!--c-logo-part-start-->
            <div class="container">
                <ul>
                    <li><a href="http://yuzz.org.es/"><img src="img/c-liogo1.png" alt=""></a></li>
                    <li><a href="http://www.santander.com/universidades/"><img src="img/c-liogo2.png" alt=""></a></li>
                    <li><a href="http://www.cise.es/"><img src="img/c-liogo3.png" alt=""></a></li>
                </ul>
            </div>
        </div><!--c-logo-part-end-->


        <footer class="footer">
            <div class="container">
                <div class="footer-logo"><a href="#"><img src="img/logo.png" alt=""></a></div>
                <span class="copyright"></span>
                <div class="credits">

                </div>
            </div>
        </footer>


        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#test').scrollToFixed();
                $('.res-nav_click').click(function () {
                    $('.main-nav').slideToggle();
                    return false

                });

            });
        </script>

        <script>
            wow = new WOW(
                    {
                        animateClass: 'animated',
                        offset: 100
                    }
            );
            wow.init();
        </script>


        <script type="text/javascript">
            $(window).load(function () {

                $('.main-nav li a, .servicelink').bind('click', function (event) {
                    var $anchor = $(this);

                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 102
                    }, 1500, 'easeInOutExpo');
                    /*
                     if you don't want to use the easing effects:
                     $('html, body').stop().animate({
                     scrollTop: $($anchor.attr('href')).offset().top
                     }, 1000);
                     */
                    event.preventDefault();
                });
            })
        </script>

        <script type="text/javascript">

            $(window).load(function () {


                var $container = $('.portfolioContainer'),
                        $body = $('body'),
                        colW = 375,
                        columns = null;


                $container.isotope({
                    // disable window resizing
                    resizable: true,
                    masonry: {
                        columnWidth: colW
                    }
                });

                $(window).smartresize(function () {
                    // check if columns has changed
                    var currentColumns = Math.floor(($body.width() - 30) / colW);
                    if (currentColumns !== columns) {
                        // set new column count
                        columns = currentColumns;
                        // apply width to container manually, then trigger relayout
                        $container.width(columns * colW)
                                .isotope('reLayout');
                    }

                }).smartresize(); // trigger resize to set container width
                $('.portfolioFilter a').click(function () {
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({

                        filter: selector,
                    });
                    return false;
                });

            });

        </script>

    </body>
</html>
