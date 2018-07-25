<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EventManager.com|Acceuil</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script></script>
</head>

<body>

    <?php 

        include("header.php");
        include 'config.php';

    ?>

    <div class="container-fluide">

        <br>
        <br>
        <br>
        <br>


        <h3 class="titre_formation text-center">Liste des évenements</h3>
        <br>
        <br>

        <?php 
            
            $stmt = $DB_con->prepare("SELECT * FROM EVENEMENT order by IdEvent desc");
            $stmt->execute();   

            if($stmt->rowCount() > 0)
            {
                while ($rows=$stmt->fetch(PDO::FETCH_ASSOC)) 
                {
                        extract($rows); 
                        $idEvent= $rows['IdEvent'];
                        $titre= $rows['TitreEvent'];
                        $lieu= $rows['LieuEvent'];
                        $datedebut= $rows['DateDebut'];
                        $datefin= $rows['DateFin'];
                        $horaire= $rows['Horaire'];
                        $nombre= $rows['NbrPlace'];
                        $entree= $rows['Entree'];
                        $contenu= $rows['Descriptions'];
                        $photo= $rows['PhotoEvent'];
                        $valider= $rows['Valider'];
                        $typeevent= $rows['IdTypeEvent'];
                        $idpersonne= $rows['IdPers'];
                        $montant= $rows['Montant'];


                        $stmt1 = $DB_con->prepare("SELECT count(IdPers) as LeNombre   FROM PARTICIPER where IdEvent=? ");
                        $stmt1->execute([$IdFomration]);  

                        if($stmt1->rowCount() > 0)
                        {
                            while ($rows=$stmt1->fetch(PDO::FETCH_ASSOC)) 
                            {
                                    extract($rows); 
                                    $LeNombre= $rows['LeNombre'];
                                 
                            }
                        }

                        $NbrPlaceRestante =  $nombre - $LeNombre;

                        $progreesion= ($LeNombre * 100)/ $nombre;


        ?>


        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $titre; ?></h3>
                    </div>
                    <div class="mise_en_forme panel-body">
                        <div class="row">

                            <div class="col-lg-12">
                                 <?php echo $contenu; ?>

                                <hr>

                                <h5>Date debut :
                                    <strong> <?php echo $datedebut; ?></strong>
                                </h5>
                                <h5>Date Fin :
                                    <strong><?php echo $datefin ;?></strong>
                                </h5>
                                <h5>Horaires :
                                    <strong><?php echo $horaire ;?></strong>
                                </h5>

                                <hr>
                            </div>


                        </div>


                        <h5>Nombre de places restantes
                            <span class="badge text-success">
                                <?php echo $NbrPlaceRestante; ?>
                            </span>
                        </h5>
                        <div class="progress">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="10" style="width: <?php echo $progreesion ;?>%">
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>
                        </div>



                        <button onclick="location.href = '" type="" class="btn btn-primary pull-right">S'inscrire pour cette formation </button>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>


    </div>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>


    </div>




    <?php include("footer.php"); ?>


</body>




</html>