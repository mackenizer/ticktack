<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Registration</title>
</head>
<body>
    <img src="<?php echo base_url();?>assets/images/wave.png" class="wave">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="text-center pb-5"></br></br>
                <h1>Create Account</h1>
                <span>Already have account? You can <a href="">Login</a> here</span>
                </div>
                <div class="d-flex justify-content-center">
                <form action="" method="post">
                    <div class="form-row my-4">
                        <div class="col-md-12 mb-2">
                       
                           <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                           
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="repass" id="repass" class="form-control" placeholder="Retype Password">
                        </div>
                        <div class="col-md-12 mb-4">
                        <select class="custom-select" id="inputGroupSelect01" name="role">
                        <option selected>Select Role</option>
                            <option value="1">Adviser</option>
                            <option value="2">Student</option>

                        </select>
                         </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" id="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label">I agree <a href="#">term, condition and policy</a></label>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn">Register</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>

</body>
</html>