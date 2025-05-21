<?php
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contacto@popol.es";
    $email_subject = $_POST['asunto'];

    function died($error) {
        // your error code can go here
        echo "There has been a failure sending the message: ";
        echo $error . "<br /><br />";
        echo "Please, try again.<br /><br />";
        die();
    }

    // validation expected data exists
    if (!isset($_POST['nombre']) ||
            !isset($_POST['email']) ||
            !isset($_POST['asunto']) ||
            !isset($_POST['mensaje'])) {
        $faltancampos = "You haven’t filled in all the text fields.";
        print "<script>alert('$faltancampos')</script>";
        print("<script>window.location.replace('http://popol.es/index.html');</script>");
        ;
    }



    $first_name = $_POST['nombre']; // required
    $email_from = $_POST['email']; // required
    $mensaje = $_POST['mensaje']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Introduce a valid email, please.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $first_name)) {
        $error_message .= 'The name you have introduced is not valid.<br />';
    }


    if (strlen($mensaje) < 2) {
        $error_message .= 'The body of the email you have introduced is too short, could you tell us more?<br />';
    }

    if (strlen($error_message) > 0) {
        print "<script>alert('$error_message')</script>";
        print("<script>window.location.replace('http://popol.es/index.html');</script>");
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($first_name) . "\n";
    $email_message .= "E-mail: " . clean_string($email_from) . "\n";
    $email_message .= "Message: " . clean_string($mensaje) . "\n";

// create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- HTML -->


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
                        <li class="small-logo"><a  class="nocolor" href="/index.html"><img src="img/small-logo.png" alt=""></a></li>
                    </ul>
                    <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
                </div>
            </nav><!--main-nav-end-->


            <div class="cemail container">
                <div class="thanks">
                    <h1>Thanks for contact us!</h1>
                    <p>We have received your email and we will try to answer you as soon as possible.</p>
                    <br><br>
                    <p>Do you want to be updated? We invite you to subscribe to our newsletter
                        if you haven’t did it already. You can do it here:</p>
                    <form action="registro.php" method="post" role="form" class="contactForm animated fadeIn delay-07s">
                        <input type="email" class="form-control newslettermail" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Introduce s valid email" />
                        <input type="submit" class="suscripcion" name="submit" value="SUSCRIBE">
                        <div class="validation"></div>
                    </form>
                    <p>Popol Team.</p>
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

            <a class="btn btn-lg volver" href="index.html">Back</a>
        </body>
    </html>

    <?php
}
?>
