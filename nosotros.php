<?php include_once "encabezado.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas</title>
    
    <link rel="stylesheet" href="./css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/2.css">
    <link rel="stylesheet" href="./css/estilo.css">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
          
       
        <style type="text/css">

            body{
            background-image: url("imagenes/FONDO.png");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-size: cover;
        }

            .testimonial-section{

                padding: 179px 0;
                text-align: center;
            }

            .inner-width{
                max-width: 1200px;
                margin: auto;
                padding: 0 20px;
            }

            .testimonial-section h1{
                font-weight: 400;
                letter-spacing: 10px;
                text-transform: uppercase;
                font-size: 20px;
            }

            .testimonial-pics{
                padding: 50px 0;
            }

            .testimonial-pics img{
                width: 80px;
                height: 80px;
                border-radius: 50%;
                margin: 0 20px;
                filter: grayscale(100%);
                transition: .3s;
                cursor: pointer;
            }

            .testimonial-pics img:hover, .testimonial-pics img.active{
                filter: none;
            }


            .testimonial-contents{
                max-width: 600px;
                margin: auto;
            }

            .testimonial{
                display: none;
            }

            .testimonial.active{
                display: block;

            }

            .testimonial p{
                color: #5c5c5c;
                margin-bottom: 60px;
            }

            .testimonial .description{
                text-transform: uppercase;
                letter-spacing: 4px;
                font-size: 15px;
                color: #2806FF;
            }
            .LPpintar{
                color: white !important;
            }
            .LPpintar:hover{
                color: turquoise !important;
            }

            div{
                color: #2806FF;
                font-size: cursive;
            }
            ul {
  font-family: sans-serif;
  font-weight: bolder;
  font: 150% sans-serif;
}

        </style>
</head>
<body>

    <div class="testimonial-section" style="padding-top: 10em">
            <div class="inner-width">
                <h1 style="font-weight: bold;" align="center">Proyecto Presentado por:</h1>
                <img src="imagenes/logo123.png">
                <div class="testimonial-pics">
                    <img src="css/andre.PNG" alt="test-1" class="active">
                    <img src="css/marco.PNG" alt="test-2">
                    <img src="css/gloria.jpg" alt="test-3">
                    <img src="css/gisselle.jpg" alt="test-4">
                    <img src="css/tueros.jpg" alt="test-5">
                    <img src="css/miluska.jpg" alt="test-6">
                </div>

                <div class="testimonial-contents">
                    <div class="testimonial active" id="test-1">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Andre Palomino/ UNTELS</span>
                    </div>

                    <div class="testimonial" id="test-2">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Marco Angulo / Untels</span>
                    </div>

                    <div class="testimonial" id="test-3">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Gloria Quispe / Untels</span>
                    </div>

                    <div class="testimonial" id="test-4">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Gisselle Bustinza / Untels</span>
                    </div>
                    <div class="testimonial" id="test-5">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Crystopher Tueros/ Untels</span>
                    </div>
                    <div class="testimonial" id="test-6">
                        <p>Compra por Internet en COMPUTRONIC de forma segura y fácil, encontrarás miles de productos de artículos de pc y OFERTAS increíbles. Envíos a todos los distritos de Lima-Perú.</p>
                        <span class="description">Miluska Navarro / Untels</span>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('.testimonial-pics img').click(function () {
                $(".testimonial-pics img").removeClass("active");
                $(this).addClass("active");

                $(".testimonial").removeClass("active");
                $("#" + $(this).attr("alt")).addClass("active");
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>