<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/stylelog.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Teacher Login</div>
      <form action="includes/loginDemo.php"  method="POST">
        <div class="field">
          <input type="text" name="name" id="name" class="form-control" placeholder="Username" required autofocus>
          <input type="text" name="role" id="role" class="form-control" value="TEACHER" hidden>   
          <label>Teacher Name</label>
          
        </div>
        <div class="field">
          <input type="password" required>
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Student login <a href="index.php">Login</a></div>
        <div class="signup-link">Not a member? <a href="includes/registration.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>
