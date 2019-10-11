<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

          $name    = $_POST['name'];
          $email   = $_POST['email'];
          $phone = $_POST['phone'];
          $course = $_POST['course'];
          
          $to_email = 'mdrobelahmedcse@gmail.com';
          $subject = 'A new user register successfully';
          $message = 'This mail is sent using the PHP mail function';


          $mail_body  = "Hello, \r\n";
          $mail_body .= "You have a new register user: \r\n";
          $mail_body .= "User name: ({$_POST['name']}) \r\n";
          $mail_body .= "User email: ({$_POST['email']}); \r\n";
          $mail_body .= "User phone: ({$_POST['phone']}) \r\n";
          $mail_body .= "Course: ({$_POST['course']}) \r\n";
          $mail_body .= "regards, \r\n";
          $mail_body .= "Syntechllc. \r\n";

 

         $headers = 'From: '.$email;


       $success =   mail($to_email,$subject,$mail_body,$headers);

       if($success){

          $message = "You are register sucessfully";

       }else{

          $message = "something is missing";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP mail function</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <div class="row">
        <div class="col-md-6 col-md-offset-3">
              <h2>PHP mail function</h2>
              <?php echo $message; ?>
              <form action="" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone:</label>
                  <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                </div>
                <div class="form-group">
                  <label for="course">Course:</label>
                  <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
                </div>
               
                <button type="submit" class="btn btn-default">Send</button>
              </form>
       </div>
   </div>
</div>

</body>
</html>
