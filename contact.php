<!DOCTYPE html>
<html lang="fr">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lawchef.com|Acceuil</title>

        <link href="css/style.css" rel="stylesheet" type="text/css">  
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">         
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">       
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script></script>
    </head>
 
    <body>
        <?php //include("header2contact.php"); ?> 
        <div class="row">
            <div  class="col-lg-12">                
            <hr id="separHaut">                          
            </div>  
        </div>     

          
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Veuillez remplir les informations suivantes...<small></small></h3>
                        </div>

                        <div class="panel-body">

                            <form role="form">

                                <div class="row">

                                    <br>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nom" id="nom" class="form-control input-sm" placeholder="Nom">
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" id="prenom" class="form-control input-sm" placeholder="Prénom">
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Adresse Email">
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label for="exampleTextarea">Message</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" placeholder="Votre message ici..." rows="10">
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                
                                <input type="submit" value="Envoyer" class="btn btn-primary btn-block">
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
          <br><br><br>
        <?php include("footer.php"); ?> 
   </body> 
   <script src="js\jquery-3.2.1.min.js"></script>  
   <script src="js/bootstrap.min.js"></script>
   <script src="js/script_entete.js"></script>
   
   <script>
       $(document).ready(function (){
           $("#service").click(function (){
               $('html, body').animate({
                   scrollTop: $("#NosServices").offset().top
               }, 2000);
           });

           $("#produit").click(function (){
               $('html, body').animate({
                   scrollTop: $("#NosProduits").offset().top
               }, 2000);
           });
       });
   </script>
    
</html>