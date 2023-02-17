<?php


    if(isset($_POST['Email'])){
        $to = "elifarihab@gmail.com";
        $message = $_POST['Message'];
        $message .= "\nNom : " . $_POST['Name'];
        $message .= "\nEmail : " . $_POST['Email'];
        $header = "From:darselma11@gmail.com \r\n";
        $header .= "Cc:darselma11@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        $retval = mail($to , "Remarques" , $message , $header);

        if($retval == true){
            header("Location:index.php");
        }else{
            echo 'erreur';
        }
    }




?>


