<?php
    session_start();
    
    if(isset($_SESSION['idpers']) AND $_SESSION['idpers']!=='')
    {
        $_SESSION['idEventChoisi'] = $_GET['idEven'];
        header('Location:enregistrement_participation_event.php');
    }
    else
    {
        header('Location:login.php');
    }
    

?>