<?php

session_start();
$masseage=0;

if (!isset($_SESSION['check_register'])){
    header("location:register.php");
}

if (isset($_POST["save"]))
{
    $otp = $_POST["otp"];

    // $temp =$_SESSION['otp'];
    // echo "$temp";

    if($_SESSION['otp'] == $otp)
    {
        $_SESSION['check_otp']=1;
        header("location:varified.php");
    }else
    {
        // echo "Invalid OTP";
        $masseage=1;

    }


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
<form class="form" action="chackotp.php" method="post">
   <p class="form-title">Sign up to your crypto account</p>
    <div class="input-container">
      <input placeholder="Enter otp" type="text" name="otp">
      <span>
        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
      </span>
    </div>
    <?php
        if($masseage == 1)
        { ?>
          
            <h3><font color="red"> Invalid OTP </font></h3>
    <?php
        }else
        {  ?>

            <h3><font color="green"> successfully send otp </font></h3>
    <?php
        }
    
    ?>
  
     <button class="submit" type="submit" name="save">
    Check otp
  </button>

  <p class="signup-link">
    edit your crypto account ?
    <a href="register.php"><font size=4>Edit</font></a>
  </p>
</form>

</center>



</body>
</html>