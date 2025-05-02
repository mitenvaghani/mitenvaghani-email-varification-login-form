<?php 


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmail/src/Exception.php';
    require 'phpmail/src/PHPMailer.php';
    require 'phpmail/src/SMTP.php';

session_start();
include_once"db.php";
$massage =0;

if (isset($_POST['register'])){
 
    $email = $_POST['email'];

    $data = "select * from `user` where email = '$email'";
    $result = mysqli_query($con,$data);
    
    // echo mysqli_num_rows($result);
    
    if(mysqli_num_rows($result) < 1)
    {   
      

        $otp = rand(1000,9999);

        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;


        
        $mail=new PHPMailer(true);
      try
      {

          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true;
          $mail->Username='vaghanimiten@gmail.com'; // enter your email .
          $mail->Password='tsko cmbg sjpn ecww';   // enter your password .
          $mail->SMTPSecure='ssl';
          $mail->Port=465;

          $mail->setFrom("vaghanimiten@gmail.com");

          $mail->addAddress($email);

          $mail->isHTML(true);
          $mail->Subject = "your crypto accout varified";
          
          $mail->Body = "hello sir: 
                <br> your Gmail accout is varified your email is <br>
                email : $email <br> <h2>otp :<h2><h1> $otp </h1> 
                <br>
                enter the otp to varify your email <br><br> &nbsp;&nbsp;&nbsp;&nbsp;<h1> welcom to register our crypto project .</h1>
                <br>";

        
          $mail->send();

          $_SESSION["check_register"]=1;

          header("location:chackotp.php");
      }
      catch(Exception $e)
      {
          echo json_encode(['status' => 'failed']);
          exit();
          
      }
    
    }else
    {

        $massage = 1;
      // header("location : register.php");

    }
  


    // if(isset($_GET['a']))
    // {
    //     $file=$_GET['a'];
        
    // }else{

    //     $file="index";

    // }
    

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in Form</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<center>
<form class="form" action="" method="post">
   <p class="form-title">Sign up to your crypto account</p>
    <div class="input-container">
      <input placeholder="Enter email" type="email" name="email">
      <span>
        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
      </span>
    </div>
    <?php
      if($massage == 1)
      {  ?>
        <h3><font color="red">This eamil is alrady register pleace try again ...</font>  </h3>
    <?php

      }


    ?>
  
     <button class="submit" type="submit" name="register">
    Sign up
  </button>

  <p class="signup-link">
    existing account open ?
    <a href="index.php">Sign in</a>
  </p>
</form>

</center>



</body>
</html>
