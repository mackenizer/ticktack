<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Dashboard</title>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_bars"></i>
        </label>
    <div class="left-area">
        <h3>Adviser <span>Dashboard</span></h3>
    </div>
        
    </header>
    <div class="sidebar">
        <center>
            <img src="<?php echo base_url();?>assets/images/2.jpg" alt="" class="profile">

        </center>
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-user-edit"></i><span>Profile</span></a>
        <a href="#"><i class="fas fa-user-friends"></i><span>Add Team</span></a>
        <a href="<?php echo base_url();?>index.php/auth/logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>
    
</body>
</html>