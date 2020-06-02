<?php
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $sub=$_POST['sub'];
     $msg=$_POST['msg'];

      
$to="contact@novosinnovators.com";
 $subject='form submission';
     $message="Name: ".$name."\n"."sub: ".$sub."\n"."wrote the following: "."\n\n".$msg;
     $headers="From: ".$email;
     
     
     if(mail($to, $subject, $message, $headers )){
         echo " <h1> Message Sent Sucessfully , Thank You"." ".$name.",We will connect you shortly</h1>";
         
     }
     
     else{
         echo "something went error";
     }
 }





$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");


?>


