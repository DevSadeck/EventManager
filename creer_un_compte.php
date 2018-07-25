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
                <h3>Créer un compte</h3>
            </div>
        </div>

<hr>
<div class="container">
    

    <div class="row">
            <div class="<col-lg-12">
                <div class="well-block">
                    <form action="enregistrement_personne.php" method="POST" >
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label"  for="nom">Nom :</label>
                                    <input required id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">
                                </div>
                            </div>

                            
                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="prenom">Prénom :</label>
                                    <input required id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label class="control-label" for="type">Sexe :</label>

                                <select id="sexe" name="sexe"  class="form-control">
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>   
                                </select>

                                </div>
                            </div>   
                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="telephone">Téléphone :</label>
                                    <input required id="telephone" name="telephone" type="text" placeholder="Téléphone " class="form-control input-md">
                                </div>
                            </div>
                            
                           <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email :</label>
                                    <input required id="email" name="email" type="email" placeholder="Email" class="form-control input-md">
                                </div>
                            </div>
                                    
                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="identifiant">Identifiant :</label>
                                    <input required id="identifiant" name="identifiant" type="text" placeholder="Identifiant" class="form-control input-md">
                                </div>
                            </div>   

                            <!-- Text input-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="motdepasse">Mot de passe :</label>
                                    <input required id="motdepasse" name="motdepasse" type="password" placeholder="Mot de passe" class="form-control input-md">
                                </div>
                            </div>   
                    
                            <!-- Button -->

                            <div class="col-lg-12">
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