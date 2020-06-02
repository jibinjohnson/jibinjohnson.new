<?php
 if(isset($_GET['submit'])){
     $name=$_GET['name'];
     $email=$_GET['email'];
     $sub=$_GET['sub'];
     $msg=$_GET['msg'];

      
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





?>


