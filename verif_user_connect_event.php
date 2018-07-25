<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();
    // On s'amuse à créer quelques variables de session dans $_SESSION


    if(isset($_SESSION['idpers']) AND $_SESSION['idpers']!=='')
    {
        header('Location:creat_event.php');
    }
    else
    {
        header('Location:login.php');
    }
    

?>

