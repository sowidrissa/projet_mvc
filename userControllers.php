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
        if(!is_connect()){
            header('location:' .PATH_PUBLIC);
        }
        if ($_GET['action']=="accueil") {
            //Chargement des Vues de Users
            if(is_admin()){
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");
            }
            if(is_joueur()){
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."menu.html.php");

            }
        }
        if ($_GET['action']=="liste.joueur") {
            //Chargement des Vues de Users
            if(is_admin()){
                lister_joueur();
            }
        }
        if ($_GET['action']=="creer.admin") {
            //Chargement des Vues de Users
            if(is_admin()){
                creer_Admin();
            }
        }
        if ($_GET['action']=="creer.question") {
            //Chargement des Vues de Users
            if(is_admin()){
                creer_Question();
            }
        }
       
    }
}

    
function lister_joueur(){
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $content_for_views= ob_get_clean();
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");

}  
function creer_Admin(){
    ob_start();
    // $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
    $content_for_views= ob_get_clean();
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");

}  

function creer_Question(){
    ob_start();
    // $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."creerQuestions.html.php");
    $content_for_views= ob_get_clean();
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");
}

