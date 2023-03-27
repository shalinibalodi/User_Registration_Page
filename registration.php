
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User - Login and Register</title>
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  
  <header>
    <h1>BusinessEra</h1>
    <nav>
      <a href="#">HOME</a>
      <a href="#">BLOG</a>
      <a href="#">CONTACT</a>
      <a href="#">PRICING</a>
    </nav>
    <div class='sign-in-up'>
      <button type='button' onclick="popup('login-popup')">LOGIN</button>
      <button type='button' onclick="popup('register-popup')">SIGNUP</button>
    </div>
  </header>
  <div class="start" id="login-popup">
    <div class="container">
      <form method="POST" action="login_register.php">
        <h1>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h1>
        <input type="text" placeholder="Enter your e-mail" name="email_username"><br><br>
        <input type="password" placeholder="Enter your password" name="password"><br><br>
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="start" id="register-popup">
    <div class="register">
      <form method="POST" action="login_register.php">
        <h1>
          <span>USER SIGNUP</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h1>
        <p>Already signed up?<a href="#" type="reset" target="_parent" onclick="popup('login-popup')">Log in</a></p><br>
        <input type="text" placeholder="Firstname" name="Firstname" > <br> <br>
        <input type="text" placeholder="Lastname" name="Lastname"> <br><br>
        <input type="email" placeholder="E-mail" name="email"> <br><br>
        <input type="password" placeholder="Password" name="password"> <br><br>
        <button type="submit" class="register-btn" name="register">SIGNUP</button>
      </form>
    </div>
  </div>
  

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

</body>
</html>

<!--run code by going to url http://localhost/user_registration/registration.php >