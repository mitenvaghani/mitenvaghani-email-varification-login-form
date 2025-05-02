<?php   

include_once"db.php";
session_start();

if(isset($_SESSION['check_login'])){
    header('location:dasboard.php');
}
if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];


    $data = "select * from `user` where email = '$email' and password = '$password'";
    $result = mysqli_query($con,$data);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['check_login'] = 1;
        header('location:dasboard.php');
       
    }else
    {
        header('location:index.php');

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
<form class="form" action="" method="post">
   <p class="form-title">Sign in to your crypto account</p>
    <div class="input-container">
      <input placeholder="Enter email" type="email" name="email">
      <span>
        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
      </span>
  </div>
  <div class="input-container">
      <input placeholder="Enter password" type="password" name="password">

      <span>
        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
          <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
      </span>
    </div>
     <button class="submit" type="submit" value="login"  name="login">
    Sign in
  </button>

  <p class="signup-link">
    No account?
    <a href="register.php">Sign up</a>
  </p>
</form>

</center>



</body>
</html>

