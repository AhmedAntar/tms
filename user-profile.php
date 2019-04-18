<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>

    <!--   Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary  fixed-top border">
      <a class="navbar-brand" href="index.html">
          <img src="img/TMS%20logo%20light.png" width="80" height="50" alt="TMS logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="courses.html">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="opportunities.html">Opportunites</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about%20us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallary.html">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact%20us.html">Contact Us</a>
          </li>
        </ul>  
           
        <div class="form-inline ml-auto my-lg-0">
         
          
            <li class="list-unstyled dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="img/email.png" class="img-fluid mr-2" width="40"> Notifications
                </a>
                <div class="dropdown-menu notify-drop text-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item d-block w-100" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  <a class="dropdown-item d-block w-100" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  <a class="dropdown-item d-block w-100" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  <a class="dropdown-item" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  <a class="dropdown-item" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  <a class="dropdown-item" href="user-profile.html" >
                    <div class="col-md-3 col-sm-3 col-xs-3 w-25 float-left">
            		        <a href="">
            		            <img src="http://placehold.it/45x45" alt="">
            		        </a>
            		</div>
            		<div class="col-md-9 col-sm-9 col-xs-9  w-75 float-left notify-body">
            		    <a class="small" href="">
            		         Web development class room
            		    </a>
            		</div>    
                </a>
                  
                </div>
              </li>
            <li class="list-unstyled dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="img/teacher.png" class="img-fluid mr-2" width="40"> Ahmed Antar
                </a>
                <div class="dropdown-menu  text-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="user-profile.html" >your profile <i class="far- fa-file float-right"></i></a>
                  <a class="dropdown-item" href="registration.html">My courses<i class="fas fa-gavel float-right"></i></a>
                  <a class="dropdown-item" href="registration.html">settings<i class="fas- fa-gavel float-right"></i></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.html">logout<i class="fas- fa-gavel float-right"></i></a>
                </div>
              </li>
          <ul class="navbar-nav">
          </ul>
        </div>
      </div>
    </nav>
    
    <!--  user-info section  -->
    <section class="course-desc" style="margin-top: 90px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
            
            <div class="card user-info" style="">
                <ul class="list-group border-0 ">
                <li class=" d-inline-block text-center">
                    <img src="img/teacher.png" width="200" class="img-fluid" alt="">
                </li>
                <li class="list-group-item text-center">
                        <h4 class="font-weight-bold">Dr. Ahmed Taha</h4>
                        <p class="text-muted">Web Istructor</p>
                </li>
                <li class="list-group-item text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook fa-2x text-primary"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-youtube fa-2x text-danger"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-google fa-2x text-warning"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter fa-2x text-info"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item text-center ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary py-2 px-4" data-toggle="modal" data-target="#exampleModalLong">
                            Edit Profile
                    </button>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-9 col-sm-6">
                <h3 class="font-weight-bolder"><a href="#">Dr. Ahmed Taha</a></h3>
                
                <ul class="d-block list-unstyled ">
                    <li class="">
                        <h4  class="p-2 border-bottom">Bio: </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.</p>
                    </li>
                    <li class="">
                        <h4  class="p-2 border-bottom">Social Links: </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.</p>
                    </li>
                    <li class="">
                        <h4  class="p-2 border-bottom">Target Audiance: </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.</p>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</section>
     
    
    <!-- Edit Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                        <!-- ACTIONS -->
                        <section id="action" class="py-4 mb-4 bg-light">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
                                    <i class="fa fa-lock"></i> Change Password
                                </a>
                                </div>
                                <div class="col-md-3">
                                <a href="#" class="btn btn-danger btn-block">
                                    <i class="fa fa-remove"></i> Delete Account
                                </a>
                                </div>
                            </div>
                            </div>
                        </section>
                        
                        <!-- PROFILE EDIT -->
                        <section id="profile">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header">
                                    <h4>Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="Brad Traversy">
                                        </div>
                                        <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" value="test@test.com">
                                        </div>
                                        <div class="form-group">
                                        <label for="body">Bio</label>
                                        <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel aliquam a commodi eligendi, esse quos perspiciatis, quas aliquid voluptates iure. Voluptatibus nisi iste voluptatum maxime dicta quisquam, nihil id!</textarea>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <h3>Your Avatar</h3>
                                <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
                                <button class="btn btn-primary btn-block">Edit Image</button>
                                <button class="btn btn-danger btn-block">Delete Image</button>
                                </div>
                            </div>
                            </div>
                        </section>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
<!--   My Courses  -->
<section class="related-courses">
    <div class="container-fluid">
        <h3 class="text-center font-weight-bold">My Courses</h3>
        <div class="row my-2 ">
                <div class="col-md-3 col-sm-6 mb-sm-3">
                                    <div class="card ">
                            <div class="figure card-img-top" >
                                <img src="img/web%20bannar.png" width="305" height="172"  class="figure__foto card-img-top" alt="...">
                                <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                          </div>
                            
                          <div class="card-body">
                           <span class="badge badge-pill badge-warning py-2 px-3">Web</span>
                            <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Web Development</a></h5>
                            
                            <div class="card-text d-flex">
                                <div class="std-num">
                                    <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="" src="img/std.png" alt="student">
                                </div>
                                <div class="inst-nam">
                                    <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank" class="">Dr.Timmy Viens</a></span>
                                </div>
                              </div>
                            <div class="text-center ">
                                <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                            </div>
                          </div>
                       </div>
                                </div>
                                   <div class="col-md-3 col-sm-6 mb-sm-3">
                                    <div class="card ">
                            <div class="figure card-img-top" >
                                <img src="img/web%20bannar.png" width="305" height="172"  class="figure__foto card-img-top" alt="...">
                                <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                          </div>
                            
                          <div class="card-body">
                           <span class="badge badge-pill badge-warning py-2 px-3">Web</span>
                            <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Web Development</a></h5>
                            
                            <div class="card-text d-flex">
                                <div class="std-num">
                                    <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="" src="img/std.png" alt="student">
                                </div>
                                <div class="inst-nam">
                                    <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank" class="">Dr.Timmy Viens</a></span>
                                </div>
                              </div>
                            <div class="text-center ">
                                <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                            </div>
                          </div>
                       </div>
                                </div>
                                 <div class="col-md-3 col-sm-6 mb-sm-3">
                                    <div class="card ">
                            <div class="figure card-img-top" >
                                <img src="img/web%20bannar.png" width="305" height="172"  class="figure__foto card-img-top" alt="...">
                                <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                          </div>
                            
                          <div class="card-body">
                           <span class="badge badge-pill badge-warning py-2 px-3">Web</span>
                            <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Web Development</a></h5>
                            
                            <div class="card-text d-flex">
                                <div class="std-num">
                                    <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="" src="img/std.png" alt="student">
                                </div>
                                <div class="inst-nam">
                                    <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank" class="">Dr.Timmy Viens</a></span>
                                </div>
                              </div>
                            <div class="text-center ">
                                <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                            </div>
                          </div>
                       </div>
                                </div>
                                   <div class="col-md-3 col-sm-6 mb-sm-3">
                                    <div class="card ">
                            <div class="figure card-img-top" >
                                <img src="img/web%20bannar.png" width="305" height="172"  class="figure__foto card-img-top" alt="...">
                                <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                          </div>
                            
                          <div class="card-body">
                           <span class="badge badge-pill badge-warning py-2 px-3">Web</span>
                            <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Web Development</a></h5>
                            
                            <div class="card-text d-flex">
                                <div class="std-num">
                                    <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="" src="img/std.png" alt="student">
                                </div>
                                <div class="inst-nam">
                                    <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank" class="">Dr.Timmy Viens</a></span>
                                </div>
                              </div>
                            <div class="text-center ">
                                <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                            </div>
                          </div>
                       </div>
                                </div>                     
            </div>
    </div>
</section>

<?php include 'footer.php'; ?>