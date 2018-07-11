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
            <div class="col-lg-12 text-center">
                <h3>Création d'un évenement</h3>
            </div>
        </div>

<hr>
<div class="container">
    

    <div class="row">
            <div class="<col-lg-12">
                <div class="well-block">
                    <form action="enregistrer_evenement.php" method="POST" >
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="titre">Titre :</label>
                                    <input id="titre" name="titre" type="text" placeholder="titre de l'évenement" class="form-control input-md">
                                </div>
                            </div>

                            
                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="lieu">Lieu :</label>
                                    <input id="lieu" name="lieu" type="text" placeholder="lieu de l'évenement " class="form-control input-md">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="datedebut">Date début :</label>
                                    <input id="datedebut" name="datedebut" type="text" placeholder="date de début " class="form-control input-md">
                                </div>
                            </div>
                            
                           <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="datefin">Date de fin :</label>
                                    <input id="datefin" name="datefin" type="text" placeholder="date de fin" class="form-control input-md">
                                </div>
                            </div>
                                    
                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="horaire">Horaire :</label>
                                    <input id="horaire" name="horaire" type="text" placeholder="horaire" class="form-control input-md">
                                </div>
                            </div>   

                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre de participants :</label>
                                    <input id="nombre" name="nombre" type="text" placeholder="nombre de participants" class="form-control input-md">
                                </div>
                            </div>   


                             <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="type">Type d'évenement :</label>

                                        <select class="form-control">
                                            <option>Conférence</option>
                                            <option>Forum</option>
                                            <option>Autre</option>
                                         </select>

                                     </div>
                            </div>   

                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="entree">Entrée :</label>
                                        <select class="form-control">
                                            <option>Gratuite</option>
                                            <option>Payante</option>
                                        </select>
                                </div>
                            </div>    


                              <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="exampleTextarea">Description</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="contenu" name="contenu" placeholder="Votre message ici..." rows="10">
                                            
                                        </textarea>
                                    </div
                                     
                                                          
                            <!-- Button -->

                            <div class="col-lg-6">
                                <div class="form-group">                                        
                                    <input class="btn btn-primary" type="submit" value = "Enregistrer">
                                </div>
                            </div>   

                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>             
        </div>  
</div>

</div>


<hr>

        <?php include("footer.php"); ?>    


     </body> 
    
   

    
</html>