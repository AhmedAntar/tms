<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>

    <!--  intro section  -->
    <section class="singleCourse-intro border">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-4 ">
                   <a href="#">
                       <img src="img/Cisco-Logo.jpeg" width="239" height="239" class="img-fluid p-2" alt="">
                   </a>
               </div>
               <div class="col-lg-9 col-md-8 col-sm-6">
                   <ul class="list-unstyled p-4 text-light">
                       <li class="p-2">
                          <span class="badge badge-warning my-3 py-2 px-3 fa-1x">Cloud</span>
                           <h3  class="display-3">Cloud Infrastructuer</h3>
                       </li>
                       <li class="p-2">
                           <button class="btn btn-light call-2-action py-2 px-4">
                               <a href="#">Enroll Now</a>
                           </button>
                       </li>
                   </ul>
                   
               </div>
           </div>
        </div>
      </section>
    
      <!-- single-course-description  -->
    <section class="course-desc">
        <div class="container-fluid">
            <div class="row">
                <!-- course-info -->
                <div class="col-md-3 col-sm-10 my-sm-2">
                <div class="card" style="border: none">
                 <div class="card-header text-center p-2 py-4 font-weight-bold bg-warning">
                    Course Information
                  </div>
                  <ul class="list-group ">
                    <li class="list-group-item d-inline-block ">
                        <div class="item-label w-75 float-left">
                            <p class="font-weight-bold">Enrolled: <span class="font-weight-normal">300 Student</span></p>
                        </div>
                        <div class="item-icon w-25 float-left">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="item-label w-75 float-left">
                            <p class="font-weight-bold">Duration: <spna class="font-weight-normal">6 Hours</spna></p>
                        </div>
                        <div class="item-icon w-25 float-left">
                            <i class="fas fa-hourglass-end fa-2x text-primary"></i>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="item-label w-75 float-left">
                            <p class="font-weight-bold">Istructor: <a href="user-profile.html" target="_blank" title="instractor name"><spna class="font-weight-normal">Dr.Jim Tiry</spna></a></p>
                        </div>
                        <div class="item-icon w-25 float-left">
                            <i class="fas fa-user-tie fa-2x text-primary"></i>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="item-label w-75 float-left">
                            <p class="font-weight-bold">Location: <spna class="font-weight-normal">Lap(2,3,4)</spna></p>
                        </div>
                        <div class="item-icon w-25 float-left">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                    </li>
                    <li class="list-group-item text-center ">
                        <button class="btn btn-primary py-2 px-4">
                               <a href="#">Enroll Now</a>
                           </button>
                    </li>
                  </ul>
                </div>
                </div>
                <!-- course-cover -->
                <div class="col-md-9 col-sm-12 my-sm-2">
                    <img src="img/web%20course.png" class="course-img img-fluid img-thumbnail" alt="">
                </div>
            </div>
            <div class="row my-4 my-sm-5">
               <div class="col-md-3 col-sm-12">
                   <h3 >Course Rating</h3>
                   <div class="border-bottom w-75 pt-2"></div>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                <div class="col-sm-12">
                        <h3 class="" style="clear: both">Review Comments</h3>
                        <div class="border-bottom w-75 pt-2"></div>
                        <div class="comments  pt-3 mt-3">
                           <div class="card-body p-2 w-100 d-inline-block bg-light">
                               <div class="w-25 float-left">
                                   <img width="60" src="img/std.png" cl alt="">
                               </div>
                               <div class="w-75 float-left ">
                                  <small class="font-weight-bold text-primary"><a href="">Hunkle Rise.</a></small>
                                   <p class="font-weight-light">This course Makes differance with my skills.</p>
                               </div>
                           </div>
                           <div class="card-body p-2 w-100 d-inline-block bg-light">
                               <div class="w-25 float-left">
                                   <img width="60" src="img/std-female.png" cl alt="">
                               </div>
                               <div class="w-75 float-left ">
                                  <small class="font-weight-bold text-primary"><a href="">Sara Jamal.</a></small>
                                   <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid inventore iure odit, sed molestiae deleniti ipsam, omnis iusto! Eaque, minima suscipit molestias ut cumque labore temporibus illo facilis corrupti impedit!</p>
                               </div>
                           </div>
                           <div class="card-body p-2 w-100 d-inline-block bg-light">
                               <div class="w-25 float-left">
                                   <img width="60" src="img/std-male.png" cl alt="">
                               </div>
                               <div class="w-75 float-left ">
                                  <small class="font-weight-bold text-primary"><a href="">Ramei Holand</a></small>
                                   <p class="font-weight-light">This course Makes differance with my skills.</p>
                               </div>
                           </div>
                           
                            <form action="" class="form-group bg-light p-3 my-3">
                                <div class="form-group">
                                    <input class="form-control " placeholder="your review here ..." type="text">
                                </div>
                                <button class="btn btn-warning call-2-action">
                                    Review
                                </button>
                            </form>
                        </div>
                </div>
               
                </div>
                <div class="col-md-9 col-sm-12 mt-sm-4">
                    <ul class="list-unstyled ">
                       <li class="">
                           <h4  class="p-2 border-bottom">Description: </h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.</p>
                       </li>
                       <li class="">
                           <h4  class="p-2 border-bottom">Pre-requisties: </h4>
                           <ol class="list-unstyled p-2">
                               <li class="p-2">- Basic Knowledge HTML.</li>
                               <li class="p-2">- Basic Knowledge CSS.</li>
                               <li class="p-2">- Java Script (ech6)</li>
                               <li class="p-2">- Text editor.</li>
                           </ol>
                       </li>
                       <li class="">
                           <h4  class="p-2 border-bottom">Objectives: </h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore, sequi consequatur. Sint iste dicta reprehenderit exercitationem reiciendis saepe, inventore. Officia rem, reprehenderit minus nam aliquid commodi perferendis magnam debitis.</p>
                       </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
     
    <!--   Related Courses  -->
    <section class="related-courses">
        <div class="container-fluid">
            <h2 class="">Related <span class="text-warning">Courses</span></h2>
            <div class="row my-2 ">
                                    <div class="col-md-3">
                                        <div class="card ">
                                <div class="figure card-img-top" >
                                    <img src="img/web%20bannar.png" width="305" height="172"  class="figure__foto card-img-top" alt="...">
                                    <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                            </div>
                                
                            <div class="card-body">
                            <span class="badge badge-pill badge-warning py-2 px-3">Web</span>
                                <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Web Development</a></h5>
                                
                                <div class="card-text ">
                                    <div class="w-25 float-left">
                                        <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="img-fluid" src="img/std.png" alt="student">
                                    </div>
                                    <div class="w-75 float-right text-right">
                                        <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank" class="">Dr.Timmy Viens</a></span>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="card ">
                                <div class="figure card-img-top">
                                    <img src="img/android%5B1%5D.png" class="figure__foto card-img-top" alt="...">
                                    <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                            </div>
                                
                            <div class="card-body">
                            <span class="badge badge-pill badge-warning py-2 px-3">Android</span>
                                <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Native mobile Application</a></h5>
                                
                                <div class="card-text ">
                                    <div class="w-25 float-left">
                                        <span class="font-weight-bold mr-2">120</span> <img width="27" height="27" class="img-fluid" src="img/std.png" alt="student">
                                    </div>
                                    <div class="w-75 float-right text-right">
                                        <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank">Dr.Timmy Viens</a></span>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                                </div>
                            </div>
                        </div>

                                        </div>
                                    <div class="col-md-3">
                                                <div class="card ">
                                <div class="figure card-img-top">
                                    <img src="img/cloud.png" class="figure__foto card-img-top" alt="...">
                                    
                                    <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                            </div>
                                
                            <div class="card-body">
                            <span class="badge badge-pill badge-warning py-2 px-3">Cloud</span>
                                <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Cloud Infrastructor</a></h5>
                                
                                <div class="card-text ">
                                    <div class="w-25 float-left">
                                        <span class="font-weight-bold mr-2">90</span> <img width="27" height="27" class="img-fluid" src="img/std.png" alt="student">
                                    </div>
                                    <div class="w-75 float-right text-right">
                                        <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank">Dr.Timmy Viens</a></span>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <a href="single%20course.html" class="btn btn-primary call-2-action mt-3 py-2 px-4">Enroll now</a>
                                </div>
                            </div>
                        </div>

                                        </div>
                                    <div class="col-md-3">
                                                <div class="card ">
                                <div class="figure card-img-top">
                                    <img src="img/microsoft.jpg" class="figure__foto card-img-top" alt="...">
                                    <p class="figure__caption"><a class="btn btn-light p-2" href="single%20course.html">more info</a></p>
                            </div>
                                
                            <div class="card-body">
                            <span class="badge badge-pill badge-warning py-2 px-3">Network</span>
                                <h5 class="card-title text-center font-weight-bold"><a href="single%20course.html">Network CCNA</a></h5>
                                
                                <div class="card-text ">
                                    <div class="w-25 float-left">
                                        <span class="font-weight-bold mr-2">300</span> <img width="27" height="27" class="img-fluid" src="img/std.png" alt="student">
                                    </div>
                                    <div class="w-75 float-right text-right">
                                        <img width="27" height="27" class="img-fluid mr-2" src="img/teacher.png" alt="student"><span class="font-weight-bold"><a href="user-profile.html" target="_blank">Dr.Junita Rorie</a></span>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <a href="single%20course.html" class="btn btn-primary  call-2-action mt-3 py-2 px-4">Enroll now</a>
                                </div>
                            </div>
                        </div>

                                        </div>
                                        </div> 
                                    <!--row-->
        </div>
    </section>

<?php include 'footer.php'; ?>