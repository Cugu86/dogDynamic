<?php
    session_start();  
    if(isset($_POST['Accesso']))
        {
        $log=$_POST["log"];
        $pw=$_POST["pw"];
        $pw=md5($pw);

        // richiesta SQL
        $query= "SELECT *  FROM user WHERE mail=:log AND password=:pw";
        //connessione database
        include('connexxion_PDO.inc.php');
        $connessione=connex('parametri');
        $resultats=$connessione->prepare($query);
        $resultats->execute(array('log'=>$log, 'pw'=>$pw));
        $ligne=$resultats->fetch(PDO::FETCH_ASSOC);
        $foto=$ligne['fotoURL'];
        $role=$ligne['role_FK'];
        $status=$ligne['status'];
        $userID=$ligne['userID'];
        $resultats->closeCursor();
        if ($ligne)
        {
              //on test si la person est un user ou bien un admin 
              if($role==1)
              {
                $_SESSION['nome']=$log;
                $_SESSION['fotoProfilo']=$foto;
                $_SESSION['nomeUser']=$ligne['name'];
                echo "<script>window.top.location='admin.php'</script>";
              }
              else
              {
                //on test si le profil est actif
                if ($status=='a') 
                  {
                    $_SESSION['chiaveUser']=$userID;
                    $_SESSION['status']=$status;
                    $_SESSION['nome']=$log;
                    $_SESSION['fotoProfilo']=$foto;
                    $_SESSION['nomeUser']=$ligne['name'];
                    $_SESSION['cognomeUser']=$ligne['surname'];
                    $_SESSION['telephone']=$ligne['telephone'];

                    echo "<script>window.top.location='profile.php'</script>";
                  }
                  else
                  {
                    echo "<script>alert('Your profile is not active anymore, for further information contact the admin');</script>";
                    echo "<script>window.top.location='index.php'</script>";
                  }
                
              }
        }
        else
          {
            ?>
             <script type="text/javascript">alert("Email or password are not correct, please try again");
             </script>
             <?php
             echo "<script>window.top.location='index.php'</script>";
          }
        }

?>