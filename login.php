<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = ''; $_SESSION['nom'] = ''; $_SESSION['age'] ='';
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
        <?php include("header.php"); ?> 
        <div class="row">
            <div  class="col-lg-12">                
            <hr id="separHaut">                          
            </div>  
        </div>  

         <div class= "container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center titres">Formulare de connexion</h3>
                <hr>    
            </div>
        </div>
        
             
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-sm-4 well">
                    <form   action="verifier_connexion.php" method="POST">                

                        <div class="form-group">
                            <label for="texte">Identifiant : </label>
                            <input id="identifiant" name="identifiant" type="text"  required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="texte">Mot de Passe : </label>
                            <input id="passe" name="passe" type="password" required class="form-control">

                        </div>
                        <div class="form-group">                       
                            <input  id="text" type="submit" value="Connecter" class="form-control btn btn-primary">
                        </div>
                    </form>   

                    <div class="form-group">                       
                            <button onclick="location.href = 'creer_un_compte.php';"   class="form-control btn btn-danger">Créer un compte</button>
                    </div> 
            </div>
                
                           
            </div>             
        </div>


    
          <br><br><br>
        <?php include("footer.php"); ?> 
   </body> 
    
    <script src="js/jquery-3.2.1.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>



    
</html>