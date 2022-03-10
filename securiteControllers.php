<?php
include_once(PATH_SRC."models".DIRECTORY_SEPARATOR."userModel.php");
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
            $login=trim($_POST['login']);
            $password=trim($_POST['password']);
            connexion($login,$password);  
        }
        if($_REQUEST['action']=='inscription'){
            if(is_admin()){
                $role= ROLE_ADMIN;
            }
            if(is_joueur()){
                $role= ROLE_JOUEUR;
            }
            $prenom=trim($_POST['prenom']);
            $nom=trim($_POST['nom']);
            $login=trim($_POST['login']);
            $score=0;
            $password=trim($_POST['password']);
            $password2=trim($_POST['password2']);
            inscription($prenom,$nom,$login,$password,$password2);
      
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
            //    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php"); 
                

                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");

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
    champ_obligatoire("login",$login,$errors,"Le champ login est requis");
    if(isset($errors['login'])){
     valid_email("login",$login,$errors);
    // $_SESSION[KEY_ERROR]=$login;
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
}

    champ_obligatoire("password",$password,$errors,"Le password est requis");
    if(isset($errors['password'])){
        lengthPassword("password",$password,$errors);
        $_SESSION[KEY_ERROR]=$password;
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
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
    }
     else{
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

function inscription(string $prenom,string $nom,string $login,string $password,string $password2):void{
    $errors=[];
    champ_obligatoire("prenom",$prenom,$errors,"Le champ prenom est requis");
    champ_obligatoire("nom",$nom,$errors,"Le champ nom est requis");
    champ_obligatoire("login",$login,$errors,"Le champ login est requis");
    champ_obligatoire("password",$password,$errors,"Le champ password est requis");
    champ_obligatoire("password2",$password2,$errors,"Le champ password2 est requis");
    valid_email('login',$login,$errors);
    if(!empty($prenom) && !empty($nom) &&  !empty($login) && !empty($password) && !empty($password2)){
                valid_email('login',$login,$errors,"Login Incorrect");     
                if(isset($errors['login'])){
                    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");       
                }
                lengthPassword('password',$password,$errors);
                if(isset($errors['password'])){
                    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");       
                }
                passwordMatch('password',$password,$password2,$errors);
                if(isset($errors['password'])){
                    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");      
                }else{
                    $resultat=usersArray();
                    array_to_json("users",$resultat);
                    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."menu.html.php");
                }
    }else{
        if(is_connect()){
            ob_start();
            // $data = find_users(ROLE_JOUEUR);
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
            $content_for_views= ob_get_clean();
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");
        
        }
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");     
    }


}

