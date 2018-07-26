<?php
    // chargement de la configuration
    include 'config.php';

    // insertion dans la base de donnees
    $stmt = $DB_con->prepare("INSERT INTO  NEWSLETTER (EmailNews) VALUES(?)");
    $stmt->execute([$_POST['mail_abonne']]);   
   
	header('Location:index.php');
?>
