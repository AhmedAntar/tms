<?php session_start(); ?>
        <!--   Navbar  -->
    <nav class="navbar navbar-expand-lg fixed-top border">
      <a class="navbar-brand" href="index.php">
          <img src="img/TMS%20logo%20light.png" width="80" height="50" alt="TMS logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="opportunities.php">Opportunites</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallary.php">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">Contact Us</a>
          </li>
        </ul>  
           
        <div class="form-inline ml-auto my-lg-0">
         <ul class="navbar-nav">
            <li class="nav-item list-unstyled dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign Up
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item  text-dark" href="registration.php" ><i class="fas fa-user-tie fa-lg mr-2"></i>Instructor </a>
          <a class="dropdown-item text-dark" href="registration.php"><i class="fas fa-user-shield fa-lg mr-2"></i>Supervisor</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-dark" href="sign-up.php"><i class="fas fa-user-graduate fa-lg mr-2"></i>Student</a>
        </div>
      </li>
          </ul>
          <button id="sign-up" class="d-block btn btn-light call-2-action  py-2 px-4 my-sm-0 font-weight-normal" type="submit" data-toggle="modal" data-target="#exampleModalLongLogin">
              Login
          </button>
        </div>
      </div>
    </nav>
    <!--  login model  -->
     <div class="modal fade" id="exampleModalLongLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="exampleModalLongTitle">
              
         <div class="modal-body">
            <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input form-control" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" required>
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				
				<div class="hr"></div>
				
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>      
            </div>
          </div>
        </div>
        </div>
    
    
    <!-- Sign-up form for students-->
   
    <div class="modal fade" id="exampleModalLongStd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitleStd" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="exampleModalLongTitleStd">
              
         <div class="modal-body">
            <div class="login-wrap">
              <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
<!--
                  <div class="sign-in-htm">
                    <div class="group">
                      <label for="user" class="label">Username</label>
                      <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="pass" class="label">Password</label>
                      <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                      <input id="check" type="checkbox" class="check" checked>
                      <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                      <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                      <a href="#forgot">Forgot Password?</a>
                    </div>
                  </div>
-->
                  <div class="sign-up-htm">
                    <div class="group">
                      <label for="user" class="label">Username</label>
                      <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="semester"  class="label">Semester Year</label>
                        <select id="semester" class="input" data-type="semester" >
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      
                    </div>
                    <div class="group">
                      <label for="pass" class="label">Email Address</label>
                      <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="pass" class="label">Password</label>
                      <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                      <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
            </div>
          </div>
        </div>


     
     
     
     
     
     

      
    </div>
     
   
    <!--   help-center btn  -->
        <a href="contact%20us.php" target="_blank">
          <img id="help-center" class="d-inline" src="img/help.png" width="47" alt="">
       </a>
  