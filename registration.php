<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/sign-up.css">
  </head>
    <body>

    <!-- connection to database -->
    <?php include 'connection.php'; ?>

    <!--   Navbar  -->
    <nav class="navbar navbar-expand-lg fixed-top border bg-warning">
            <a class="navbar-brand" href="index.html">
                <img src="img/TMS%20logo%20light.png" width="80" height="50" alt="TMS logo"> <span class="font-weight-bolder text-white">Training Management System</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <i class="fas fa-bars"></i>
              </span>
            </button>
    </nav>
    
    <!--   Sign-up form  -->
    <div class="signup-form">
        <form >
            <center><img src="img/teacher.png" class="img1"></center>
            <h2 class="">
                Sign-Up
            </h2>
            <p class="hint-text">Make sure that your account is secure <a class="font-weight-bolder" href="index.html">Back</a></p> 
                
            <div class="form-group">
                <div class="row"> 
                    
                            
                    <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name*" required="required" autofocus></div>
                    <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name*" required="required"></div>
                </div> 
            
            </div>  
            <div class="form-group">
            
                <input type="email" class="form-control" name="email" placeholder="Type your email*" required="required">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Type your phone number">
            </div>
                <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Gender </label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
                </div>  -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Rolle</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="professor">professor</option>
                    <option value="teaching-assistant">Teaching Assistant</option>
                    <option value="supervisor"selected>supervisor</option>
                    <option value="students-affairs">Students Affairs</option>
                </select>
                </div>
                <div class="input-group mb-3">

                </div>
                
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Type your password*" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password*" required="required">
            </div>        
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
            </div>
            <div class="text-center">Already have an account? <a href="index.html">Sign in</a></div>

        </form>
	</div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    </body>
</html>