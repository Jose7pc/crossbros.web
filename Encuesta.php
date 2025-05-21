<?php 
  $mi_conexion=mysql_connect('db676798010.db.1and1.com','dbo676798010','GASI2015') or die('No se puedo conectar con la base de datos'); 



   mysql_select_db('db676798010',$mi_conexion); 

/* 
Base_de_datos: nombre de su base de datos. 
*/ 

   $query_Tabla = "SELECT correo FROM encuestados"; 
   $Tabla = mysql_query($query_Tabla, $mi_conexion) or die(mysql_error()); 

/* 
Email: es el nombre del campo que requerimos, si ha seguido nuestras instrucciones creando nuestra misma tabla en la base de datos no debe cambiar esto. 
Usuarios: es el nombre de la tabla donde está el campo 'email', si ha seguido nuestras instrucciones creando nuestra misma tabla en base de datos no debe cambiar esto. 
*/ 

//elaboramos cadena de emails 
  $emails=""; 
  while ($row_Tabla=mysql_fetch_assoc($Tabla)) { 
   $emails.=($row_Tabla['correo'].", "); 
   } 

  $largo=strlen($emails); 
   if ($largo>2) 
{ 
   //quitamos ultimos ", " 
   $emails=substr($emails,0,$largo-2); 
} 
else 
{ 
   echo "¡No hay destinatarios!"; 
   die(); 
}; 

// se definen los argumentos de mail( ): 
$asunto='Invitación a popol'; 
$mensaje='<html>
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
                <img style=" display: block; width:34%;" src="http://popol.es/email/logo.png" alt="popol">
                <h1 style=" color:#fff; padding:20px 20px 25px;background-color: rgba(0,0,0,0.3); border-radius: 4px; margin: 7.5% 13% 0; text-align: center; font-size: 28px;">Te invitamos a Popol</h1>
            </div>
        </div>

        <div style=" margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px;">
            <div style="color:#000000; padding:20px; border: #204d74 solid 2px; text-align:justify;">
                <p>¡Hola!
                <br><br>
                Si has recibido este mensaje, es porque respondiste a una encuesta sobre desarrollo de contenido y videojuegos.
                <br><br>
                Pues bien, tras recibir y verificar vuestras respuestas, pudimos comprobar que nuestra idea, Popol,
                era necesaria. Queremos cambiar el mundo de los videojuegos. Para ello, vamos a dar una vuelta a la forma
                en que se desarrolla y distribuye cada producto, dando la posibilidad de crear un videojuego a cualquier persona.
                <br><br>
                Te invitamos a echar un vistazo al proyecto en <a style=" color:#204d74; outline:0px; text-decoration: none;" href="http://popol.es">popol.es </a>y a suscribirte a la newsletter.
                <br><br>
                También puedes seguirnos en <a style=" color:#204d74; outline:0px; text-decoration: none;" href="https://www.facebook.com/WebPopol/">facebook </a> y <a style=" color:#204d74; outline:0px; text-decoration: none;" href="https://twitter.com/popol_es">twitter</a>.
                <br><br>
                ¡Gracias por la atención!
                <br><br>
                Atentamente,<br>
                El equipo de Popol.
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
</html>'; 

/* 
Aquí debe poner su email en formato HTML 
*/ 

$envia='El equipo de Popol'; 
$remite='contacto@popol.es'; 

/* 
Enviante: Nombre del enviante 
Email_remitente: email que desea mostrar como remitente. 
*/ 

$losemails ='martapez@popol.es';

/// Envío del email: 

mail(null, $asunto, $mensaje, "MIME-Version: 1.0 
Content-type: text/html; charset=iso-8859-1 
From: $envia <$remite> 
Bcc: $emails" . "\r\n") or die("Error al Enviar el Email"); 
echo "Mensaje Enviado con Éxito"; // 

   mysql_free_result($Tabla); 
   mysql_close($mi_conexion); 
?>
