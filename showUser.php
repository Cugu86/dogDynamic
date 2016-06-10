  <?php
              
              session_start();

              //script permettant l'affichage du profile user

              if(!empty($_POST['userDisac']))
              {
                $user=$_POST['userDisac'];
                $query= "SELECT * FROM user WHERE mail='$user'";

                include('connexxion_PDO.inc.php');
                $connessione=connex('parametri');

                $resultats=$connessione->prepare($query);
                $resultats->execute();
                $ligne=$resultats->fetch(PDO::FETCH_OBJ);

                  if ($ligne) 
                    {
                        $userID=$ligne->userID;
                        $name= $ligne->name;
                        $surname=$ligne->surname;
                        $mail=$ligne->mail;
                        $telephone=$ligne->telephone;
                        $activationDate=$ligne->activationDate;
                        $fotoURL=$ligne->fotoURL;
                        $role=$ligne->role_FK;
                        $status=$ligne->status;

                        $_SESSION['showUserID']=$userID;
                        $_SESSION['showName']=$name;
                        $_SESSION['showSurname']=$surname;
                        $_SESSION['showMail']=$mail;
                        $_SESSION['showTelephone']=$telephone;
                        $_SESSION['showActivationDate']=$activationDate;
                        $_SESSION['showFotoURL']=$fotoURL;
                        $_SESSION['showRole']=$role;
                        $_SESSION['showStatus']=$status;
                        echo "<script>window.top.location='admin.php'</script>";

                    }
                    else
                      $_SESSION['non_esiste']="This User doesn't exists";
                      echo "<script>window.top.location='admin.php'</script>";
                      
              }
              else
              {
                  $_SESSION['non_corretto']="Please Insert a valid user name";
                  echo "<script>window.top.location='admin.php'</script>";
              }
?>