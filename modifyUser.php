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
                        if ($_SESSION["nomeUser"]!='')
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

  
           <div class= "col-md-6" >   
                <form method="post" action="updateUser.php">

                <?php
                        if (!empty($_SESSION['showUserID'])) 
                        {
                            
                            echo"<p>User ID<input type='text' name='userID' class='form-control' value='$_SESSION[showUserID]' >";
                            echo"<p>Name<input type='text' name='changeName' class='form-control' value='$_SESSION[showName]'>";
                            echo"<p>Surname<input type='text' name='changeSurname' class='form-control' value='$_SESSION[showSurname]'>";
                            echo"<p>Mail<input type='text' name='changeMail' class='form-control' value='$_SESSION[showMail]'>";
                            echo"<p>Telephone<input type='text' name='changeTelephone' class='form-control' value='$_SESSION[showTelephone]'>";
                            echo"<p>Activation Date<input type='text' class='form-control' value='$_SESSION[showActivationDate]' disabled>";
                            echo"<p>Foto URL<input type='text' name='changeFotoULR' class='form-control' value='$_SESSION[showFotoURL]'>";
                            echo"<p>Role<input type='text' name='changeRole' class='form-control' value='$_SESSION[showRole]'>";
                            echo"<p>Status<input type='text' name='changeStatus' class='form-control' value='$_SESSION[showStatus]'>";
                            echo"<br>";

                            echo"<button type='submit' class='btn btn-primary'  name='modifica'> Modify Values </button>";
                            unset($_SESSION['showUserID']);

                        }


                ?>
                </form>
                <br>
                    <?php

                        if(!empty($_SESSION['modificaEffetuata']))
                        {
                            echo"<div class='alert alert-success' role='alert'>";
                            echo $_SESSION['modificaEffetuata'];
                            unset($_SESSION['modificaEffetuata']);
                            echo"</div>";
                            
                        }
        
                        if (!empty($_SESSION['modificaAnnullata']))
                        {
                            echo"<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION['modificaAnnullata'];
                            unset($_SESSION['modificaAnnullata']);
                            echo"</div>";
                            
                        }
                    ?>
                
            </div>
    

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
                        Copyright &copy; Taste My Web 2016
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
