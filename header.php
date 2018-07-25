
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Event Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right"  id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Acceuil<span class="sr-only">(current)</span></a></li>
        <li class=""><a  href="verif_user_connect_event.php">Créer un évenement<span class="sr-only">(current)</span></a></li>
        <li class=""><a id="evenement"  href="liste_event.php">Evenement<span class="sr-only">(current)</span></a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
            <a href="<?php  if(isset($_SESSION['idpers']) AND $_SESSION['idpers']!==''){ Echo 'deconnect.php';  } else{ echo 'login.php'; }?>">
                <?php  if(isset($_SESSION['idpers']) AND $_SESSION['idpers']!==''){ Echo 'Déconnexion';  } else{ echo 'Connexion'; }?>
            </a>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    