<?php
session_start();

if (isset($_POST["inserisci"])) 
{

    if(!empty($_FILES['dogPic']))
	   {
          $pic_name=$_FILES['dogPic']['name'];
          $pic_size=$_FILES['dogPic']['size'];
          $pic_temp=$_FILES['dogPic']['tmp_name'];
          $ext=pathinfo($pic_name,PATHINFO_EXTENSION);
          $pic_url=md5($pic_name).".".$ext;
          move_uploaded_file($pic_temp, "imgProfiles/".$pic_url);
	   }
	     else
        {
           $pic_url="default-user-image.png";
        }

    $userID=$_SESSION['chiaveUser'];
    $dogName=htmlspecialchars($_POST['nameDog']);
    $gender=($_POST['gender']);
    $comment=htmlspecialchars($_POST['comment']);
    $age=$_POST['age'];
    $razza=$_POST['razza'];
    $misura=$_POST['misura'];

    $_SESSION['sizeDog']=$misura; // chiave size
    $_SESSION['race']=$razza; // chiave Breeds
    $queryDog="INSERT INTO Dogs VALUES  ('','$dogName','$gender', '$age','', '$comment','$pic_url','a','$userID','$razza','$misura') ";

    include('connexxion_PDO.inc.php');
    $connessione=connex('parametri');
    $resultsDog=$connessione->prepare($queryDog);
    $resultsDog->execute();
     
    if($resultsDog)
      { 
        ?>
                <script type="text/javascript">alert("You inserted a new dog");
                </script>
                <?php


        echo "<script>window.top.location='profile.php'</script>";
      }
      else
      {
        ?>
                <script type="text/javascript">alert("SOMETHING WENT WRONG!!!");
                </script>
                <?php
      }

}
?>


