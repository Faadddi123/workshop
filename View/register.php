<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="View/Style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <form action="index.php?action=login" method="post">
        <div class="container">
        <div class="wrapper">
            <div class="title"><span>regiter Form</span></div>
            <form action="#">
            <div class="row">
                <i class="fas fa-user"></i>
                <input name="email" type="text" placeholder="Email" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input name="name" type="name" placeholder="name" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <button type="submit" >Register</button>
            </div>
            <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
            </form>
        </div>
        </div>
    </form>
    

  </body>
</html>