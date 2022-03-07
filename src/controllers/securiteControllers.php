<?php
include_once(PATH_SRC."models".DIRECTORY_SEPARATOR."userModel.php");
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){
        if($_POST['action']=='connexion'){
            
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
            
        }
      
        }
     }
    /**
    * Traitement des Requetes GET
    */
    if($_SERVER['REQUEST_METHOD']=="GET"){
        // echo "<br>On à une requete GET";
        if(isset($_GET['action'])){
            if($_GET['action']=='connexion'){
              require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php"); 
            // echo "<br>Action=Connexion";
       
            }elseif($_GET['action']=='deconnexion'){
            // echo "<br>Action=Deconnexion";
                logout();
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            }elseif($_GET['action']=='inscription'){
            //   require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php"); 
                

                require_once(PATH_VIEWS."users/inscription.html.php"); 

            }
            else{
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
                // echo "<br>action inconnue";
            }
            
        }else{
           
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            // echo "<br>l'action n'existe pas";
     }
}  

function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
    valid_email("login",$login,$errors);
}

champ_obligatoire("password",$password,$errors);
if(!isset($errors['password'])){

 //valid_password("password",$password,$errors);

}

    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        if(count($userConnect)!=0){
            $_SESSION[USER_KEY]=$userConnect;
            header("location:".PATH_PUBLIC."?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION['errors']=$errors;
            header("location:".PATH_PUBLIC);
            exit();
        }
    } else{
        $_SESSION['errors']=$errors;
        header("location:".PATH_PUBLIC);
        exit();
    }
}

function logout():void{
    $_SESSION['user_connect']=array();
    unset($_SESSION['user_connect']);
    session_destroy();
    header("location:".PATH_PUBLIC);
    exit();
}
