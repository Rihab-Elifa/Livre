
/*ini_set('SMTP','smtpout.secureserver.net');
ini_set('smtp_port',80);
 

// the message
$msg = $_POST['Message'];
$msg = str_replace("\n.", "\n..", $msg);


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
//mail($to,$subject,$msg);
global $resultMessage;
global $errorMessage;


if(isset($_POST['submit'])){
    $to= 'elifarihab@gmail.com';
    $from = $_POST['Email'];
    $subject='My subject';

    $name= $_POST['Name'];
    $email= $_POST['Email'];

    $message= $_POST['Message'];
if(!$name){
    $errorMessage="<br>Please enter your name..";
}
if(!$email){
    $errorMessage.="<br>Please enter your email address";
}
if(!$subject){
    $errorMessage.="<br>Subject..";
}
if(!$message){
    $errorMessage.="<br>Enter your message..";
}
if($errorMessage){
    $resultMessage="Please fill the required informations".$errorMessage;
}   else{
if(mail($to, $subject,$message,'From: elifarihab@gmail.com')){
    $resultMessage="Your mail has been sent.";
    echo $resultMessage;
} else{
    echo 'mail() Failure!';
}

}
}
/*$to      = 'user@domain.com';
$subject = 'Subject';
$message = 'This is a test';
$headers = 'From: webmaster@yourdot.com' . "\r\n" .
   'Reply-To: webmaster@yourdot.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);*/
