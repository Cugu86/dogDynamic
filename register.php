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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->

    <section id="registrazione" >
 <?php
     
      //inscription    

      if($_POST['password']==$_POST['password2']) //check if the password are the same
       {
        if (!empty($_FILES['profilePic'])) // loading a profile picture
        {
          $errori= array();
          $pic_name=$_FILES['profilePic']['name'];
          $pic_size=$_FILES['profilePic']['size'];
          $pic_temp=$_FILES['profilePic']['tmp_name'];
          $ext=pathinfo($pic_name,PATHINFO_EXTENSION);
          $pic_url=md5($pic_name).".".$ext;
          move_uploaded_file($pic_temp, "imgProfiles/".$pic_url);
        }
        else
        {
          $pic_url="default-user-image.png";
        }

        $name=htmlspecialchars($_POST['nameuser']);
        $lastname=htmlspecialchars($_POST['lastname']);
        $tel=htmlspecialchars($_POST['tel']);
        $password=md5($_POST['password']);
        $email=$_POST['email'];

        $queryMail="SELECT mail FROM user WHERE mail='$email' ";

        include('connexxion_PDO.inc.php');
        $connessione=connex('parametri');
        $resultsMail=$connessione->prepare($queryMail);
        $resultsMail->execute();
        $linee=$resultsMail->rowCount();

        if($linee==0)//on test si le profile existe deja
          {
                $query="INSERT INTO user (name,surname,mail,password,telephone,fotoURL,status, role_FK) 
                        VALUES ('$name','$lastname','$email','$password','$tel','$pic_url','a','2')";

                $results=$connessione->prepare($query);        
                $results->execute();

                  if($results)
                    { 
                      echo "<center>";
                      echo "<h2>Hello ".ucfirst($name)." your registration is confirmed</h2></br>";
                      echo "<h4>An eMail has been sent to your address</h4></br>";
                      echo "<h3>Your Inscription details:</h3></br>";
                      echo "Login: ".$email."</br>";
                      echo "Password: ".$_POST['password']."</br></br>";
                      echo "Name:".ucfirst($name)."</br> Surname:".ucfirst($lastname)."</br></br>";
                      echo "Telephone: ".$tel."</br></br>";
                      echo "Image Pic: ".$pic_url."</br></br>";
                      echo "<h4>To enter your dog details, go into your profile  </h4>";
                      echo "<h3>Now you can Login</h3>";
                      echo "<button type='button' data-toggle='modal' data-target='#ModalLogin' class='btn btn-primary'>Login</button>";
                      echo "</center>";
                    }
                    $results->closeCursor();
                    $resultsMail->closeCursor();
           }
           else
            {
              ?>
                <script type="text/javascript">alert("This profile exists already!, Please login");
                </script>
                <?php
                echo "<script>window.top.location='index.php'</script>";
            }
      }
      else
       {
          ?>
             <script type="text/javascript">alert("Passwords are not the same!");
             </script>
             <?php
        }
  ?>
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
            <div class="row">
                 <div class="col-lg-6 text-center "  >
                   <div id="contatto" > 
                    <b><h3>Call me</h3>
                        <p>Dog Save the Queen</p>
                        <p>Elisabetta Cibotto</p>
                        <p>Tel: 0483 04 32 88</p>
                        <p>Mail: cb8@gmail.com</p></b>
                   </div>
                    
                 </div>
                 <div class="col-lg-6 text-center ">
                    <img  class="img-circle" src="img/contactPicture.jpg">
                 </div>
            </div>
            <div class="row">

                    <div class="col-lg-12 text-center">

                                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3406266364714!2d4.35465821507438!3d50.82485427952878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c48ad10e4531%3A0x5e2c5103634cf683!2sDog+Save+The+Queen+Pet+Groomers!5e0!3m2!1sit!2sbe!4v1455034697001" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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


