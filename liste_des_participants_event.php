<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION
?>

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
        
        
<div class="container">
        
        <div class="row">
         <!-- /.col-lg-6 -->
          <div class=" col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Liste des participants
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                      <div class="table-responsive table-bordered">
                          <table class="table table-striped">
                              <thead>
                              <tr>
                                    <th>Nom</th>    
                                    <th>Prénom</th>                                                                          
                                    <th>Sexe</th>  
                                    <th>Téléphone</th>                                                                          
                                    <th>Email</th>                                                           
                                </tr>
                            </thead>

                            <tbody> 

                                <?php  
                                    
                                    include("config.php");                                      
                                    $stmt = $DB_con->prepare("SELECT NomPers,PrenomPers,SexePers,TelPers,EmailPers FROM PERSONNE,EVENEMENT where PERSONNE.Idpers = EVENEMENT.IdPers AND EVENEMENT.IdEvent=? ");
                                    $stmt->execute([$_GET['idEvent']]);    

                                      if($stmt->rowCount() > 0)
                                      {
                                          while ($rows=$stmt->fetch(PDO::FETCH_ASSOC)) 
                                          {
                                                  extract($rows); 
                                                  $nom = $rows['NomPers'];
                                                  $prenom= $rows['PrenomPers'];
                                                  $sexe= $rows['SexePers'];
                                                  $telephone= $rows['TelPers'];
                                                  $email= $rows['EmailPers'];
                                               
                                                ?>
                                                  
                                              <tr>
                                                  <td> <?php  echo $nom;?> </td>
                                                  <td> <?php  echo $prenom;?> </td>
                                                  <td> <?php  echo $sexe;?> </td>
                                                  <td> <?php  echo $telephone;?> </td>
                                                  <td> <?php  echo $email;?> </td>
                                                                                              
                                        <?php                   
                                          }
                                      }   

                                  ?>   
                                  <tr>                                 
                                                                                  
                                                                                                                                            
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
          </div>
          <!-- /.col-lg-6 -->
        
    </div>

  </div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php include("footer.php"); ?>    

   </body> 
    
    <script src="js/jquery-3.2.1.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>



    
</html>