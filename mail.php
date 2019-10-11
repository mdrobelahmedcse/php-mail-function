<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){

          $name    = $_POST['name'];
          $email   = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          
        $to      = 'mdrobelahmedcse@gmail.com';
        $subject = 'A new user register on your website';
        $message = 'hello';
        $headers = 'From: rubelahammed017@gmail.com' . "\r\n" .
        'Reply-To: rubelahammed017@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

         mail($to, $subject, $message, $headers);

    }
?>