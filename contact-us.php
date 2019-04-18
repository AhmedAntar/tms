<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>

    <!--  contact-intro section  -->
    <section class="contact-intro border  overlay">
       <div class="container-fluid">
           <div class="d1">
                  <h2 class="d2 display-3 font-weight-bolder ">Contact Us</h2>

           </div>
       </div><!--   container  -->
    </section> 
   
    <section id="contact-us" style="margin-top: 60px">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3 class="font-weight-bold ml-2  my-3 p-2">Contact <span class="text-warning">Info.</span></h3>
                    <ul class="list-unstyled p-3">
                        <li class=" border-bottom py-3">
                            <img src="img/address.png" width="50" height="50" class="mr-2">
                            <span><b>Postal Address: </b>Po Box 3000-104 New Banha - Banha - Qalioubia.</span>                            
                        </li>
                        <li class=" border-bottom py-3">
                            <img src="img/phone.png" width="50" height="50" class="mr-2">
                            <span><b>Phone/Fax: </b>(013) 3229371.</span>                            
                        </li>
                        <li class=" border-bottom py-3">
                            <img src="img/website.png" width="50" height="50" class="mr-2">
                            <span><b>Website: </b><a href="#" target="_blank">http://www.fci.bu.edu.eg.</a></span>                            
                        </li>
                        <li class=" border-bottom py-3">
                            <img src="img/email.png" width="50" height="50" class="mr-2">
                            <span><b>E-mail: </b><a href="#" target="_blank">bfci.contacts@bfci.com</a></span>                            
                        </li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="font-weight-bold mb-3 ml-2 p-2">Avenue <span class="text-warning">Location.</span></h3>

                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                </div>
            </div>
            
        </div>
    </section>
    <section class="bg-white" id="feedback">
        <div class="container">
            <h2>Feed<span class="text-warning">back</span></h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-sm-3">
                    <form name="feedback">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="type your name..." required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="name">Email</label>
                            <input class="form-control" type="email" name="name" placeholder="type your email..." required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message">Message</label>
                            <textarea class="form-control" name="message" id="" cols="77" rows="8" placeholder="type your message..." maxlength="300" required></textarea>
                        </div>
                        <button class="btn btn-warning py-2 px-4 call-2-action" type="Submit">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid mt-5 " src="img/opportunities5.png" alt="contact-img">
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>