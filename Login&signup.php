<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login&signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
<div class="title signup">Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form name="login" action="#" method="post" class="login">
            <div class="field">
              <input type="email" name="lemail" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="lpassword" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="Login"  value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form name="signup" method="post" action="#" class="signup">
            <div class="field">
              <input type="email"  name="semail" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="spassword" placeholder="Password" required>
            </div>
<div class="field">
              <input type="password" name="scpassword" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="Signup" value="Signup">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>
    <?php 
    $conn=mysqli_connect("localhost","root","","microproject");

    
    if(isset($_POST["Signup"])){
      if(!empty($_POST['semail']) && !empty($_POST['spassword']) &&!empty($_POST['scpassword']) ){
        $suname=$_POST['semail'];
        $spass=$_POST['spassword'];

        $query="insert into signup(username ,password) values ('$suname','$spass')";
        $run=mysqli_query($conn,$query)or die(mysqli_error());
      }
      else {
        echo "All fileds required";
      }   
    }
  


    if(isset($_POST["Login" ])){
      if(!empty($_POST['lemail']) && !empty($_POST['lpassword']) ){
      $username=$_POST['lemail'];
      $password=$_POST['lpassword'];

      $query1="select * from signup where username='$username' and password='$password'";
      $result=mysqli_query($conn,$query1);
      $count=mysqli_num_rows($result);
      if($count>0){
        
        Echo "Login Successful";
      }
      else {
        Echo "Login Unsuccessful";
      }
    }
    else{
      echo "All fields are required";
    }
    }
   
    
  

    
    ?>


  </body>
</html>