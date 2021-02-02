<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page 1</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<img src="<?php echo base_url();?>assets/images/wave.png" class="wave">
<div class="container">
    <div class="img">
        <img src="<?php echo base_url();?>assets/images/bg.svg" alt="">
    </div>
    <div class="login-container">
        <form action="" method="post">
            <img class="avatar" src="<?php echo base_url();?>assets/images/avatar.svg" alt="">
            <h2>TickTack</h2>
            <p>Build your project with your team</p>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Username</h5>
                    
                    <input type="text" name="username" class="input" placeholder="Username">
                </div>
            </div>
            <div class="input-div two">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div>
                    <h5>Password</h5>
                    <input type="password" name="password" class="input" placeholder="Password">
                </div>
            </div>
          

            <a href="" class="forgot">Forgot Password?</a>
            
            <input type="submit" class="btn" value="Login">
            <a href="" class="signup">Signup</a>

        </form>
    </div>

    
</div>

</body>
</html>