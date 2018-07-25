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
        <div class="row">
            <div class="col-lg-12 col-md-1 col-sm-1 ">
                <img class="image_haut" src="images/d.jpg"> 
            </div>
        </div>

        <div class="row titre_evenement">
            <div class="col-lg-12 text-center col-md-1 col-sm-1 ">
                <a id="NosEvenements" href="#"></a>
               <h1 class="">Evenements </h1>
            </div>
        </div>


        <div class="row text-center ">
           <div class="container">
           <div class="col-lg-3 col-md-4">
                <div class="thumbnail">
                    <img src="images/comp.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Plus</a> 
                        </p>
                    </div>
                 </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="thumbnail">
                    <img src="images/comp.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Plus</a> 
                        </p>
                    </div>
                 </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="thumbnail">
                    <img src="images/comp.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Plus</a> 
                        </p>
                    </div>
                 </div>
            </div>
            
            <div class="col-lg-3 col-md-4">
                <div class="thumbnail">
                    <img src="images/comp.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Plus</a> 
                        </p>
                    </div>
                 </div>
            </div>
           </div>
            
    </div>
  
    <nav aria-label="...">
        <ul class="pager">
            <li><a href="liste_event.php">Voir Plus</a></li>
        </ul>
    </nav>
    <div class="row">
    <br> <br>
    </div>
    <div class="row">
            <div class="col-lg-12 text-center col-md-1 col-sm-1 ">
               <h1 class="">Nos Partenaires</h1>
            </div>
     </div>

    <div class="bloc_partenaire">
        <div class="row">
            <div class="col-lg-3">
                <img src="images/2.png" alt="">
            </div>
            <div class="col-lg-3">
                <img src="images/2.png" alt="">
            </div>
            <div class="col-lg-3">
                <img src="images/2.png" alt="">
            </div>
            <div class="col-lg-3">
                <img src="images/2.png" alt="">
            </div>
        </div>
    </div>


     
</div>



    
        <?php include("footer.php"); ?>    


   </body> 
    
    <script src="js/jquery-3.2.1.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>



    
</html>