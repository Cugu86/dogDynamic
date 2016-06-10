<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dog Save the Queen - Best Dog grooming in Brussels - Dog Save the Queen provides a professional grooming service tailored to yours and your pets requirement">
    <meta name="author" content="Marco Todaro">

    <title>Dog Save the Queen - Best Dog grooming in Brussels </title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dog Save The Queen</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#portfolio">Services</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#contact">Contact</a>
                    </li>
                     <?php
                        if (!empty($_SESSION["nomeUser"]))
                        {
                           echo "<li class='page-scroll'>
                                <a>"; ?> <?php echo 'PROFILE &nbsp; '. ucfirst($_SESSION['nomeUser'])?> 
                                    <?php echo"</a> </li>
                                     <li><a href='logout.php?logout'>Log Out</a></li>";
                        }
                        else
                        {
                            echo" <li>
                                    <a data-toggle='modal' href='#ModalLogin'>Login</a>
                                  </li>
                                  <li>
                                    <a data-toggle='modal' href='#ModalSignUp'>Register</a>
                                  </li>";
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <img class="img-responsive" src="img/logoDogSaveTheQueen.png" alt="Dog Save The Queen Logo">

                    <div class="intro-text">
                        <span class="name">Get a Bath!</span>
                       <div class="row" > 
                            <div class="col-lg-12">
                                <img  class="img-responsive" src="img/bones.png">
                            </div> 
                        </div>
                        <span class="skills">Breed based services - Professional tools - We love dogs</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Grid Section -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Services</h2><br>
                    
                    
    <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail">
            <img src="img/img1.jpg" alt="Hair Removal" class="img-circle" >
              <div class="caption">
                <h3>Hair removal</h3>
                  <p>The coats of many breeds require trimming, cutting... </p>
                  <p> <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal">Read More</button></p>
              </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail">
            <img src="img/img2.jpg" alt="Bathing" class="img-circle" >
              <div class="caption">
                <h3>Grooming Plan</h3>
                  <p>Total grooming programme. Get the look</p>
                  <p> <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal">Read More</button></p>
              </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail">
            <img src="img/img3.jpg" alt="Nail trimming" class="img-circle" >
              <div class="caption">
                <h3>Nail trimming</h3>
                  <p>Nail trimming is essential for maintaining a good health.</p>
                  <p> <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal">Read More</button></p>
              </div>
          </div>
        </div>

      </div>
            
    </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                        <div class="row" > 
                            <div class="col-lg-12"><center>
                                <img  class="img-responsive" src="img/bones.png">
                            </div><br><br>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Dog Save the Queen provides a professional grooming service tailored to yours and your pets requirements. We believe that good grooming is very much part of a dog and cat's overall general health and satisfactory mental wellbeing. 
                    The full groom includes, among other things, brushing, shampoo and blow dry, clipping, ears cares and nail clipping or just a quick make over. </p>
                </div>
                <div class="col-lg-4">
                    <p>All breeds and cross breeds of dogs and cats are welcome.</p><p>Grooming is produced at the highest standard and as close as possible to the breed standard. We aim to provide the trim that suits your life style and your pet's comfort. Since there is no dog the same, we are open for any special request. 
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center ">
                    <h2>Contact me</h2><br><br>
                    
                 </div>
            </div>
            <center><img  class="img-responsive" src="img/bonesDark.png"></center>
            <div class="row" id="contattoPiuFoto" >
                 <div class="col-lg-6 text-center "  >
                   <div id="contatto" > 
                    <b><h3>Call me</h3>
                        
                             <p>Dog Save the Queen</p>
                             <p>Tel: 0483 04 32 88</p>
                             <p>Mail:<a href="mailto:cb8@gmail.com"> cb8@gmail.com</a></p>
                             <p>Open from 10am to 6pm</p>
                   </div>
                    
                 </div>
                 <div class="col-lg-6 text-center ">
                    <img  class="img-circle" src="img/contactPicture.jpg">
                 </div>
            </div>
             <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">

                    <div class="col-lg-12 text-center">

                                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3406266364714!2d4.35465821507438!3d50.82485427952878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c48ad10e4531%3A0x5e2c5103634cf683!2sDog+Save+The+Queen+Pet+Groomers!5e0!3m2!1sit!2sbe!4v1455034697001" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>
            </div>
            

           
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p> Dog Save the Queen <br> Rue de l'Aqueduc 53, <br>1060 Bruxelles</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Dog-Save-the-Queen-109941635832415/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About</h3>
                        <p>Elisabetta Cibotto is the owner and a professional dog groomer based in Bruxelles.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Marco Todaro 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

     <!-- Modal Services  -->
      
      <div class="portfolio-modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Services</h2>
                           <div class="row" > 
                                <div class="col-lg-12">
                                    <img  class="img-responsive" src="img/bonesDark.png">
                                </div> 
                            </div>
                            <center>
                                <img src="img/imgServices.jpg" alt="Dog Service" class="img-responsive" >
                            </center>

                            <p>You will be surprised how competitive our prices are. </p><p>To arrange a consultation or for a comprehensive list of prices and services available, please call 0483 04 32 88 or visit our shop at Rue de l'Aqueduc 53, 1060 Brussels.</p><p> Languages spoken: English, French, Italian.</p>
                            <h3>Services List</h3>
                        
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal Login -->
        <div id="ModalLogin" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md ">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Login</h3>
                        </div>
                        <div class="modal-body">
                            <form action="login.php" method="post" enctype="multipart/form-data" >

                             Mail<br/><input type="email" class="form-control" name="log" placeholder="E-Mail" required><br/>
                            Password<br/><input type="password" class="form-control" name="pw" placeholder="Password" required><br/>
                 
                             <input type="submit" class="btn btn-primary" value="Submit" name="Accesso" > 
                             <input type="reset" class="btn btn-default" value="Cancel">

                            </form>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                    </div>
          </div>
        </div>

     <!-- Modal sign up -->
        <div id="ModalSignUp" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md ">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Sign Up</h3>
                        </div>
                        <div class="modal-body">
                            <form action="register.php" method="post" enctype="multipart/form-data" >

                            <h4>Member Information</h4></br>
                
                            Name<br/><input type="text" class="form-control" name="nameuser" placeholder="Name" required><br/>
                            Last Name<br/><input type="text" class="form-control" name="lastname" placeholder="Last Name" required><br/>
                            Telephone<br/><input type="text" class="form-control" name="tel" placeholder="Telephone" required><br/>
                            Profile Image<br/><input type="file" class="form-control" name="profilePic" ><br/>
                
                            <h4>Finalize Inscription</h4>

                             Mail<br/><input type="email" class="form-control" name="email" placeholder="E-Mail" required><br/>
                            Password<br/><input type="password" class="form-control" name="password" placeholder="Password" required><br/>
                            Confirm Password<br/><input type="password" class="form-control" name="password2" placeholder="Repeat password" required><br/>
                 
                            <input type="submit" class="btn btn-primary" value="Submit"  > 
                             <input type="reset" class="btn btn-default" value="Cancel">

                            </form>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                    </div>
          </div>
        </div>

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
