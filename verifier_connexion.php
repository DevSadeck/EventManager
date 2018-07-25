
<?php
    session_start();
    // chargement de la configuration
    include 'config.php';

     // verier que l'utilisateur existe dans la base de donnees
    $stmt = $DB_con->prepare("SELECT * from PERSONNE WHERE Identifiant =? AND Motdepasse=?");
    $stmt->execute([$_POST['identifiant'], $_POST['passe']]);
    
    if($stmt->rowCount() > 0) // tester s'il existe bien des clients
    {
        $rows=$stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['idpers'] = $rows['IdPers']; 
        $_SESSION['nomPers'] = $rows['NomPers']; 
        $_SESSION['prenomPers'] = $rows['PrenomPers']; 
        $_SESSION['sexePers'] = $rows['SexePers']; 
        $_SESSION['telephonePers'] = $rows['TelPers']; 
        $_SESSION['emailPers'] = $rows['EmailPers']; 
       

       // if ($statut =="Administrateur") {

		 header('Location: index.php');

       // }else
        //{
          //   header('Location: connexion_refuser.php');
       // }

    }else
    {
        header('Location: connexion_refuser.php');
    }


?>



