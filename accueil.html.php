
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=PATH_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <title>Login</title>
</head>

<body>
   <div class="container">
        <div class="head">
            <h3>CRÉER ET PARAMÉTRER VOS QUIZZ</h3>
            <a href="<?=PATH_PUBLIC."?controller=securite&action=deconnexion"?>" class="deconnexion">Déconnexion</a>
        </div>
        <?php if (is_joueur()) {?> <h1>BIENVENUE</h1> <?php } ?>
        <?php if (is_admin()) {?>
        <div class="corps">
            <div class="navbar">
                <div class="headnav">
                    <div class="headnav-img"><img src="<?= PATH_PUBLIC.'img'.DIRECTORY_SEPARATOR."img.jpeg"?>" alt="" width="100px" height="100px">
                </div>
                    <div><h2><?= $_SESSION[USER_KEY]['prenom']." ".$_SESSION[USER_KEY]['nom']; ?></div> 
                </div>
                <script>
                  
                </script>
                <div class="corpsnav">  
                    <ul>
                        <li class="li">
                            <span> <a class="a" href="">Liste des Questions</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <li class="li">
                        <span><a class="a" href="<?=PATH_PUBLIC."?controller=user&action=creer.admin"?>">Créer Admin</a></span>
                            <img src="img/ic-ajout.png" alt="">
                        </li>
                        <li class="li">
                        <span><a class="a" href="<?=PATH_PUBLIC."?controller=user&action=liste.joueur"?>">Liste des joueurs</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <li class="li">
                        <span><a href="<?=PATH_PUBLIC."?controller=user&action=creer.question"?>" class="a">Créer Questions</a></span>
                            <img src="img/ic-ajout.png" alt="">
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="bloc-info">
                <?php echo  $content_for_views; ?>
            </div>            
   <?php } ?>
   </body>


</html>

  

