


<?php
    // chargement de la configuration
    include 'config.php';

    // insertion dans la base de donnees	
    $stmt = $DB_con->prepare("INSERT INTO  EVENEMENT (TitreEvent,LieuEvent,DateDebut,DateFin,Horaire,NbrPlace,Entree,Descriptions,PhotoEvent,Valider,IdTypeEvent,IdPers,Montant) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$_POST['titre'],
                    $_POST['lieu'],
                    $_POST['datedebut'],
                    $_POST['datefin'],
                    $_POST['horaire'],
                    $_POST['nombre'],
                    $_POST['entree'],
                    $_POST['contenu'],
                    $_POST['photo'],
                    $_POST['valider'],
                    $_POST['typeevent'],
                    $_POST['idpersonne'],
                    $_POST['montant']
                ]);   

	header('Location:creat_event.php');
?>