<?php
include_once(PATH_SRC."models".DIRECTORY_SEPARATOR."userModel.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){
        if ($_POST['action']="accueil") {
            
        }
        echo "bonjour";
     }
}


 if($_SERVER['REQUEST_METHOD']=="GET"){
  
    if(isset($_GET['action'])){
    if ($_GET['action']=="accueil") {
    $first_lien="Dashboard";
    $sub_lien="Home";
    
    //Chargement des Vues de Users
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");
         }
        }
    }

    
    function lister_joueur(){
         $data = find_users("ROLE_JOUEUR");
        }

        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(isset($_GET['action'])){
            if ($_GET['action']=="accueil") {
            $first_lien="Dashboard";
            $sub_lien="Home";
                if(isset($_GET['view'])){
                        switch ($variable) {
                        case 'liste.joueur':
                            lister_joueur();
                         //ob_start();
                        require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."listeJoueur.html.php");
                         //$content_for_template= ob_get_clean();
                     break;
                 }
            }else{
            ob_start();
            $data=lister_joueur();
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."listeJoueur.html.php");
            $content_for_template= ob_get_clean();
            }
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");
                    }
             }
         }     