<?php 
    session_start();

    //script permettant la modification du profile user par l'admin
    
    $userID=$_POST['userID'];
	$nome=$_POST['changeName'];
	$cognome=$_POST['changeSurname'];
	$mail=$_POST['changeMail'];
	$telefono=$_POST['changeTelephone'];
	$role=$_POST['changeRole'];
	$status=$_POST['changeStatus'];

    $query="UPDATE user SET   name='$nome',surname='$cognome',mail='$mail',telephone='$telefono', status='$status', role_FK='$role' 
            WHERE userID='$userID'";

    include('connexxion_PDO.inc.php');
    $connessione=connex('parametri');

    $results=$connessione->prepare($query);
    
    if($results->execute())
    {
        $_SESSION['modificaEffetuata']="MODIFICATION WAS SUCCEFFULL";
        echo "<script>window.top.location='admin.php'</script>";
    }
    else
    {
        $_SESSION['modificaAnnullata']="SOMETHING WENT WRONG";
        echo "<script>window.top.location='admin.php'</script>";
    }

?>
