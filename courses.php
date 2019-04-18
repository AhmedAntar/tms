<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>

    <!--  course-intro section  -->
    <section class="course-intro">
        <div class="overlay">
            <div class="container-fluid">
                <div class="d1">
                    <div class="d2">
                        <div class="searchbar">
                            <input onkeyup="showProduct(this.value)" class="search_input" type="text" name="" placeholder="Search course..." aria-label="search">
                            <a class="search_icon" onclick="showProduct(this.value)" ><i class="fa fa-search text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--   container  -->
        </div>
    </section>
    <!--   Courses  -->
    <section id="our-courses">
        <div class="container-fluid">
            <h2>Our <span class="text-warning">Courses</span></h2>
            <div class="row mt-4 my-4">
                <div class="col-12 text-center">
                    <ul class="list-unstyled list-inline-item p-2 text-center" id="portfolio-flters">
                    <li class="list-inline-item">
                        <button class="btn btn-primary call-2-action font-weight-normal"  data-filter="*" class="filter-active">All Categories</button>
                    </li>
                    <li class="list-inline-item" data-filter=".filter-Web">     
                        <a class="text-primary p-2" href="#">Web</a>
                    </li>
                    <li class="list-inline-item" data-filter=".filter-android">     
                        <a class="text-primary p-2" href="#">Android</a>
                    </li>
                    <li class="list-inline-item" data-filter=".filter-c">     
                        <a class="text-primary p-2" href="#">C++</a>
                    </li>
                    <li class="list-inline-item" data-filter=".filter-Network">     
                        <a class="text-primary p-2" href="#">Network</a>
                    </li>
                    <li class="list-inline-item" data-filter=".filter-cloud">     
                        <a class="text-primary p-2" href="#">Cloud</a>
                    </li>

                    </ul>

                </div>
            </div>
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
                                <!--.row-->
            <div class="row my2 mt-5">
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
                            <!--.row-->
            <div class="text-center my-4 mt-5">
                <button class="btn btn-primary call-2-action py-2 px-4">Load more</button>
            </div>
                



        </div>
    </section>

<?php include 'footer.php'; ?>