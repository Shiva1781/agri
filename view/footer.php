 <!-- About-->
 <?php
      $connection = mysqli_connect("localhost","root","","add");
      $query= "SELECT * from about  ";
      $query_run = mysqli_query($connection,$query);
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
                ?>
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Farmer </h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $row['tittle'];?></h4>
                                <h4 class="subheading"><?php echo $row['subtitle'];?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $row['description'];?></p><br><p class="text-muted"><?php echo $row['link'];?></p></div>
                        </div>
                    </li>
                       
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Come Join Us</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="anas.jpg" alt="..." />
                            <h4>Mohammad Anas</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2t.jpeg" alt="..." />
                            <h4>Tanmay Tiwari</h4>
                            <p class="text-muted">Project Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpeg" alt="..." />
                            <h4>Shiva Singh</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">We have got an Amazing and Experienced team that constantly tries to work for the welfare of farmers of our country.</p><p class="large text-muted">Come and be a part of our community.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <script>
            function validateForm(){
                let x =document.forms["myform"]["name"].value;
                if (x==""){
                    alert("Name must be filled");
                    return false;
                }
                let y =document.forms["myform"]["email"].value;
                if (y==""){
                    alert("Email must be filled");
                    return false;
                }
                let z =document.forms["myform"]["phone"].value;
                if (z==""){
                    alert("Phone no must be filled");
                    return false;
                }
                let m =document.forms["myform"]["message"].value;
                if (m==""){
                    alert("message no must be filled");
                    return false;
                }
            }
            </script>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">For Query</h3>
                </div>
                <!-- to get an API token!-->
                <form action="code.php" method="Post" id="contactForm" name="myform" onsubmit="return validateForm()" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" type="text" placeholder="Your Name *"  />
                                
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary" name="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
                
    </body>
</html>
