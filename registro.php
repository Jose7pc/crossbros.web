<?php
$host_db = "db676798010.db.1and1.com";
$user_db = "dbo676798010";
$pass_db = "GASI2015";
$password = "GASI2015";
$db_name = "db676798010";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE correo = '$_POST[email]' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);
$today = date("Y-m-d");

if ($count > 0) {
    echo "<br />" . "¡Ya estás suscrito a Popol!" . "<br />";
} else {
    $aleatorio = uniqid();

    $query = "INSERT INTO `db676798010`.`usuarios` (`email`, `fecha_alta`, confirmacion)
           VALUES ('$_POST[email]', '$today', '$aleatorio')";

    if ($conexion->query($query) === TRUE) {


        $correo = $_POST[email];
        $url = "http://popol.es/activacion.php?id=" . $aleatorio;
        $mensaje = '<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title>Popol</title>
        <link rel="icon" href="../favicon.png" type="image/png">
        <link rel="shortcut icon" href="../favicon.ico" type="img/x-icon">



        <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->


    </head>
    <body style=" background:#fff; font-size:14px; font-weight:normal; color:#000000; margin:0;">

        <div style=" margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px;">
            <div style="display:block; background:url(http://popol.es/img/bg.jpg); background-size:cover; background-repeat:no-repeat; background-position:top left; padding:5% 5% 10%;">
                <img style=" display: block; width:45%;" src="http://popol.es/email/logo.png" alt="popol">
                <h1 style=" color:#fff; padding:20px 20px 25px;background-color: rgba(0,0,0,0.3); border-radius: 4px; margin: 7.5% auto 0; text-align: center; font-size: 28px;">Confirma tu cuenta</h1>
            </div>
        </div>

        <div style=" margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px;">
            <div style="color:#000000; padding:20px; border: #204d74 solid 2px; text-align:justify;">
                <h2 style="text-align:center;">¡Gracias por suscribirte!</h2><br><br>
                <p>
                    Al suscribirte al newsletter de Popol, recibirás correos cada cierto tiempo donde
                    te informaremos del progreso del proyecto o compartiremos contigo noticias que
                    creamos que te pueden gustar.
                <br><br>
                    Tu suscripción es muy importante para nosotros, pues supone la confianza necesaria
                    para continuar nuestro trabajo, pero necesitamos pedirte un último click:
                <br><br>
                    Pulsa en este enlace para confirmar tu correo: <br> <a href="' . $url . '">' . $url . '</a>
                <br><br>
                    Añadenos como contacto en tu correo para evitar que mensajes como este sean filtrados
                    como SPAM
                <br><br>
                    Gracias por tu atención.<br>
                    Con cariño, el equipo de Popol.
                </p>
            </div>
        </div>
        
        <div style=" margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px;">
            <div style="background:url(http://popol.es/img/bg.jpg) top left; background-size: cover; background-repeat: no-repeat; padding:3% 5% 3%; color:#fff; font-size: 18px;">
                <div style="display:inline-block;"><a href="http://popol.es"><img style="width: 25%;" src="http:popol.es/img/logo.png" alt=""></a></div>
                <div style=" margin: 20px 0 0;">
                    <p style="margin:0;"><a style="color:#fff; outline:0px; text-decoration: none;" href="mailto:contacto@popol.es"><img src="http://popol.es/email/fa-envelope.png">&nbsp;contacto@popol.es</p>
                    <a style="margin:0; color:#fff; outline:0px; text-decoration: none;" href="https://twitter.com/popol_es"><p style="margin:8px 0;"><img src="http://popol.es/email/fa-twitter.png">&nbsp;@Popol_es</p></a>
                    <a style="margin:0; color:#fff; outline:0px; text-decoration: none;" href="https://fb.me/WebPopol"><p style="margin:8px 0;"><img src="http://popol.es/email/fa-facebook">&nbsp;@WebPopol</p></a>
                </div>
            </div>
        </div>

    </body>
</html>

Crea. Comparte. Juega. Popol.';

        $cabeceras = 'From: contacto@popol.es' . "\r\n" .
                'Reply-To: contacto@popol.es' . "\r\n";



        $asunto = "Activación de tu suscripción en Popol";

        $envia = 'El equipo de Popol';
        $remite = 'contacto@popol.es';



        mail($correo, $asunto, $mensaje, "MIME-Version: 1.0 
Content-type: text/html; charset=iso-8859-1 
From: $envia <$remite> 
Bcc: $correo" . "\r\n") or die("Tu suscripción no pudo ser activada");
        
        echo "Mensaje enviado."; // 
        ?>


        <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, maximum-scale=1">

                <title>Popol</title>
                <link rel="icon" href="favicon.png" type="image/png">
                <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
                <meta property="og:title" content="Popol" />
                <meta property="og:url" content=" http://popol.es" />
                <meta property="og:image" content=" http://popol.es/img/logo.jpg" />
                <meta name="og:description" content="¿Alguna vez has querido hacer un videojuego? Popol pone en tu mano todo lo necesario para ello. Crea. Comparte. Juega.">
                <link rel="icon" href="favicon.png" type="image/png">
                <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

                <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

                <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
                <link href="css/style.css" rel="stylesheet" type="text/css">
                <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
                <link href="css/responsive.css" rel="stylesheet" type="text/css">
                <link href="css/animate.css" rel="stylesheet" type="text/css">

                <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

                <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.js"></script>
                <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.isotope.js"></script>
                <script type="text/javascript" src="js/wow.js"></script>
                <script type="text/javascript" src="js/classie.js"></script>

            </head>
            <body>
                <nav class="main-nav-outer" id="test"><!--main-nav-start-->
                    <div class="container">
                        <ul class="main-nav">
                            <li class="small-logo"><a  class="nocolor" href="/index.html"><img src="img/small-logo.png" alt=""></a></li>
                        </ul>
                        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
                    </div>
                </nav><!--main-nav-end-->


                <div class="container cthanks">
                    <div class="thanks col-lg-8 col-sm-12">
                        <h1>¡Gracias por suscribirte!</h1>
                        <p>Hemos enviado un correo a <?php echo "$correo"; ?> para confirmar tu suscripción.
                            Si crees que no lo has recibido, consulta tu bandeja de correo no deseado o contacta
                            a través de contacto@popol.es </p>
                        <br><br>
                        <p style="margin-bottom: 30px;">Con cariño, el equipo de Popol.</p>
                        <p style="margin-bottom:0px" class="share">Compartir:
                            <a href="http://www.twitter.com/home?status=Acabo+de+suscribirme+en+Popol+http://popol.es+(via+@Popol_es)"><i class="fa-twitter"></i></a>
                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fpopol.es&layout=icon&mobile_iframe=true&width=14&height=14&appId" width="14" height="14" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-11 paypal">
                        <h2>Un último favor</h2>
                        <p class="descripcion">Gracias a tu suscripción ya hemos conseguido crecer. Ahora,
                            ayúdanos a seguir avanzando. <br><br> Pulsando en el siguiente botón, podrás donar
                            la cantidad que quieras para ayudar en el desarrollo del proyecto.
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7U4FR59M5W4WC">
                            <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>


                <footer class="footer">
                    <div class="container">
                        <div class="footer-logo"><a href="/index.html"><img src="img/logo.png" alt=""></a></div>
                        <span class="copyright"></span>
                        <div class="credits">

                        </div>
                    </div>
                </footer>
                
                
                <a class="btn btn-lg volver" href="index.html">Volver</a>

            </body>
        </html>

        <?php
    } else {
        echo "Ocurrió un fallo al realizar la suscripción \n: " . $query . "<br>" . $conexion->error;
    }
}
mysqli_close($conexion);
?>