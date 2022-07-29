<?php
    $to = "contacto@seguelpropiedades.cl";
    $subject = "Formulario de contacto";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@seguelpropiedades.cl\r\n";

    //Datos Propiedad
    $tipoPropiedad = $_POST['tipoPropiedad'];
    $otro = $_POST['otro'];
    $direccion = $_POST['direccion'];
    $comuna = $_POST['comuna'];
    $estadoPropiedad = $_POST['estadoPropiedad'];
    $metrosConstruidos = $_POST['metrosConstruidos'];
    $dimensionesTerreno = $_POST['dimensionesTerreno'];
    $dormitorios = $_POST['dormitorios'];
    $bannos = $_POST['bannos'];

    //Datos contacto
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    if ($tipoPropiedad == null) {
        header('Location: confia.html');
    } else {

        $message = "
    <html>
    <head>
    <title>HTML</title>
    <style>
    .h1-correo {
        text-align: center;
    }

    .div-correo {
        border: solid;
        border-color: #5166806e;
        color: #34465c;
        margin: 10px auto;
        max-width: 800px;
        display: block;
    }

    .correo-titulo {
        text-align: center;
        border-bottom: solid;
        border-color: #5166806e;
        padding-bottom: 10px;
    }

    .tabla-correo {
        margin: 0 auto;
        list-style: none;
        font-size: 18px;
        max-width: 800px;
    }

    tr {
        max-width: 800px;
    }

    td {
        padding: 5px 15px;
    }

    td:first-child {
        font-weight: bold;
    }
    </style>
    </head>
    <body>
    <h1 class='h1-correo'>Formulario nueva propiedad</h1>
    <div class='div-correo'>
        <h2 class='correo-titulo'>Datos propiedad</h2>
        <table class='tabla-correo'>
            <tr>
                <td>Tipo de Propiedad</td>
                <td> ".$tipoPropiedad."</td>
            <tr>
                <td>Otros</td>
                <td> ".$otro."</td>
            <tr>
                <td>Direcci&oacute;n</td>
                <td> ".$direccion."</td>
            <tr>
                <td>Comuna</td>
                <td> ".$comuna."</td>
            <tr>
                <td>Estado de la propiedad</td>
                <td> ".$estadoPropiedad."</td>
            <tr>
                <td>Metros construidos</td>
                <td> ".$metrosConstruidos."</td>
            <tr>
                <td>Dimensiones del Terreno</td>
                <td> ".$dimensionesTerreno."</td>
            <tr>
                <td>Dormitorios</td>
                <td> ".$dormitorios."</td>
            <tr>
                <td>Baños</td>
                <td> ".$bannos."</td>
        </table>
    </div>

    <div class='div-correo'>
        <h2 class='correo-titulo'>Datos contacto</h2>
        <table class='tabla-correo'>
        <tr>
            <td>Nombre</td>
            <td> ".$nombre."</td>
        </tr>
        <tr>
            <td>Email</td>
            <td> ".$email."</td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td> ".$telefono."</td>
        </tr>
        <tr>
            <td>Mensaje</td>
            <td> ".$mensaje."</td>
        </tr>
        </table>
    </div>
    </body>
    </html>";
    
    mail($to, $subject, $message, $headers);
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguel Propiedades</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacto.css">
</head>

<body>
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img class="logo" src="img/logo-seguelpropiedades.png" alt="Logo Seguel Propiedades">
                </a>
                <nav class="navegacion">
                    <a href="/">Home</a>
                    <a href="/nosotros.html">Nosotros</a>
                    <a href="/contacto.html">Contacto</a>
                    <a href="/confia.html">
                        <div class="boton-confia">Confianos tu propiedad</div>
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <div class="mobile-menu">
        <div class="whatsapp-barra">
            <a class="enlace-whats" href="https://wa.me/56945702579"><img src="img/whatsapp-barra.ico" alt=""></a>
        </div>

        <div id='slide_nav'>
            <p id="slide_nav_button">☰</p>
        </div>
        <div class="logo-mobile">
            <a href="/">
                <img src="img/logo-seguelpropiedades.png" alt="Logo Seguel Propiedades">
            </a>
        </div>

        <ul id='slide_menu'>
            <li><a href="/">Home</a></li>
            <li><a href="/nosotros.html">Nosotros</a></li>
            <li><a href="/contacto.html">Contacto</a></li>
            <li><a class="confia" href="/confia.html">Confíanos tu propiedad</a></li>
        </ul>
    </div>

    <main class="contenedor seccion">
        <h2 class="centrar-texto">Confíanos tu propiedad</h2>
        <div class="div-correo">
            <h3 class="correo-titulo">Datos propiedad</h3>
            <table class="tabla-correo">
                <tr>
                    <td>Tipo de Propiedad</td> 
                    <td> <?php echo $tipoPropiedad ?></td>
                </tr>
                <tr>
                    <td>Otros</td> 
                    <td> <?php echo $otro ?></td>
                </tr>
                <tr>
                    <td>Direcci&oacute;n</td> 
                    <td> <?php echo $direccion ?></td>
                </tr>
                <tr>
                    <td>Comuna</td> 
                    <td> <?php echo $comuna ?></td>
                </tr>
                <tr>
                    <td>Estado de la propiedad</td> 
                    <td> <?php echo $estadoPropiedad ?></td>
                </tr>
                <tr>
                    <td>Metros construidos</td> 
                    <td> <?php echo $metrosConstruidos ?></td>
                </tr>
                <tr>
                    <td>Dimensiones del Terreno</td> 
                    <td> <?php echo $dimensionesTerreno ?></td>
                </tr>
                <tr>
                    <td>Dormitorios</td> 
                    <td> <?php echo $dormitorios ?></td>
                </tr>
                <tr>
                    <td>Baños</td> 
                    <td> <?php echo $bannos ?></td>
                </tr>
            </table>
        </div>

        <div class="div-correo">
            <h3 class="correo-titulo">Datos contacto</h3>
            <table class="tabla-correo">
                <tr>
                    <td>Nombre</td> 
                    <td><?php echo $nombre ?></td>
                </tr>
                <tr>
                    <td>Email</td> 
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>Telefono</td> 
                    <td><?php echo $telefono ?></td>
                </tr>
                <tr>
                    <td>Mensaje</td> 
                    <td><?php echo $mensaje ?></td>
                </tr>
            </table>
        </div>
    </main>

    <div class="whatsapp-flotante">
        <a class="enlace-whats" href="https://wa.me/56945702579"><img class="whatsapp-img" src="img/whatsapp-flotante.ico" alt="WhatsApp"></a>
    </div>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/">Home</a>
                <a href="/nosotros.html">Nosotros</a>
                <a href="/contacto.html">Contacto</a>
            </nav>
            <p class="copyright">Todos los derechos reservados 2020</p>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#slide_nav_button").click(function() {
            $('#slide_menu').animate({
                width: 'toggle'
            }, 300);
        });
    });
</script>

</html>