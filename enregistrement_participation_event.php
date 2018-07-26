
<?php
    session_start();
    
   $IDPERS = $_SESSION['idpers'];
   $IDEVENT =   $_SESSION['idEventChoisi'];
   $MyDate =  date('Y/m/d H:i:s');

   include 'config.php';

   // insertion dans la base de donnees	
   $stmt = $DB_con->prepare("INSERT INTO  PARTICIPER (IdPers,IdEvent,DateParticipation) VALUES(?,?,?)");
   $stmt->execute([ $IDPERS,
                    $IDEVENT,
                    $MyDate
               ]);   

   header('Location:liste_event.php');
?>
