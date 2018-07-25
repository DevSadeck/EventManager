


<?php
    // chargement de la configuration
    include 'config.php';

    // insertion dans la base de donnees	
    $stmt = $DB_con->prepare("INSERT INTO  PERSONNE (NomPers,PrenomPers,SexePers,TelPers,EmailPers,Identifiant,MotDePasse) VALUES(?,?,?,?,?,?,?)");
    $stmt->execute([$_POST['nom'],
                    $_POST['prenom'],
                    $_POST['sexe'],
                    $_POST['telephone'],
                    $_POST['email'],
                    $_POST['identifiant'],
                    $_POST['motdepasse']
                ]);   

	header('Location:login.php');
?>