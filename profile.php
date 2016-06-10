<?php
   session_start();
 
  //queries to get the list of values for the select tag

  $queryBreed="SELECT *  FROM Breeds ORDER BY name  ";
  $querySize="SELECT *  FROM size";

  //queries to get the list of dogs of a logged user

  $userFK=$_SESSION['chiaveUser'];

  $queryDog= "SELECT * from Dogs WHERE user_FK='$userFK' ORDER BY name ";
  

  //connection to database

  include('connexxion_PDO.inc.php');
  $connessione=connex('parametri');

  //executions of the queries

  $resultatsBreed=$connessione->prepare($queryBreed);
  $resultatsSize=$connessione->prepare($querySize);

  $resultatsBreed->execute();
  $resultatsSize->execute();

  $ligneBreed=$resultatsBreed->fetchAll();
  $ligneSize=$resultatsSize->fetchAll();

  
  $resultatsDog=$connessione->prepare($queryDog);
  $resultatsDog->execute();

  $ligneDog=$resultatsDog->fetchAll();

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

   <section class='profile' >
    <div class="container"  >
        <div class="row" id="intestazioneProfilo" >
            <div class="col-sm-3"><div class='imgProfileProfilePafe' style="background-image:url('imgProfiles/<?php  echo$_SESSION["fotoProfilo"];?>')" ></div></div>
            <div class="col-sm-7"><?php echo $_SESSION["nome"];?>  <h3> <?php echo ucfirst($_SESSION["nomeUser"]).' '.ucfirst($_SESSION["cognomeUser"]);?> </h3> Telephone: <?php echo $_SESSION["telephone"];?> <br/><br/> Number of post/Number of followers/ Number of profile followed  </div>                                                        
            <div class="col-sm-2"> <a href="modifyUser.php"><button class="btn btn-primary" >Modify profile</button></a><br/><br/></div> 
        </div>
    </div>
     <div class="row" > 
                    <div class="col-lg-12">
                       <center>  <img  class="img-responsive" src="img/bones.png"></center>
                    </div> 
        </div>
      <div class="dog">
      <center><h1>My Dogs</h1>
        
      <div class="bottoneCane" >
      <p><button class="btn btn-primary" data-toggle="modal" data-target="#addDog" >Add a Dog</button>
      <a href='' class='btn btn-default' role='button'>Modify dogs </a></p></center></div>
      
       <?php 

        //show dogs list

        if ($ligneDog) 
           {
              
              foreach ($ligneDog as $value) 
                  {
                    echo"<center> 
                          <div class='col-sm-4 col-md-4'>
                            <div class='thumbnail'>
                              <img width=300 class='img-rounded' src='imgProfiles/$value[profilePicDog]' alt='Dogs of the Users'>
                                  <div class='caption'>
                                    <h3>$value[name]</h3>
                                    <b><p>Dog age:</b> $value[age] years &nbsp;&nbsp;&nbsp;
                                       <b>Sex:</b> $value[sex]</p> 
                                    <p>$value[comments]</p>
                              </div>
                            </div>
                          </div>
                        </div></center>";
                  }
            }
        else
          {
            echo"<center><h3>You do not have any dogs yet! </h3></center>";       
          }
       ?>
      
      <!-- Modal -->
<div id="addDog" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Add a Dog</h4></center>
      </div>
      <div class="modal-body">
        <h4>Dog Information</h4></br>
                
                <form action="addDog.php" method="post" enctype="multipart/form-data" >
                Name<br/><input type="text" class="form-control" name="nameDog" placeholder="Dog Name" required autofocus ><br/>
                 <input type="radio" name="gender" value="male" required > Male<br/>
                 <input type="radio" name="gender" value="female" required > Female<br/><br/>
                Age<br/><input type="number" class="form-control" name="age" placeholder="Age" required><br/>
                Breed <br/><select  class="form-control"  name='razza' >
                <?php
                foreach ($ligneBreed as $value) 
                  {
                      echo"<option value=$value[BreedID]>$value[name]</option>";
                  }
                    ?>

                      </select><br/>

                Size<br/><select class="form-control"  name='misura' >
                <?php
                foreach ($ligneSize as $valueS) 
                  {
                      echo"<option value=$valueS[sizeID] >$valueS[name]</option>";
                  }
                    ?>
                           </select><br/><br/>


                Dog Image<br/><input type="file" class="form-control" name="dogPic" ><br/>
                Comments <textarea name="comment" placeholder="Add some comments" class="form-control" ></textarea><br/><br/>
                <center><input type="submit" class="btn btn-primary" value="Submit" name="inserisci" > 
                <input type="reset" class="btn btn-default" value="Cancel"></center>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>
      
    <div class="container" >
      <div class="row" > 
          <div class="col-sm-12" ><h3>My Bookings:</h3>  &nbsp;&nbsp;  <a href=""><button class="btn btn-primary" >Add a Booking</button></a> </div> 
      </div>
    </div>
    <hr/>
    <div class="container" >
      <div class="row" > 
          <div class="col-sm-12" ><h3>Lists of Posts: </h3>  &nbsp;&nbsp; <a href=""><button class="btn btn-primary" >Add a Post</button></a> </div> 
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
