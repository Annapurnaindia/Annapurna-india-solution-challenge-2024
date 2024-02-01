<?php
$name = $_post['name'];
$visitor_email = $post['email'];
$subject= $_psot['subject'];
$message = $_post['message'];
$email_from='info@mywebsite address';
$email_subject ='new form submssion';
$email_body="user Name: $name.\n".
            "user Email: $visitor_email.\n".

            "subject: $subject.\n".

            "user message: $message .\n.";
 $to='imranalamg02322@gmail.com';
 $headers ="from: $email-from \r\n";
 $headers .="reply-to: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers) ;
 header("location: contact.html");     
            







?>
