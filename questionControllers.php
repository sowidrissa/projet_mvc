<?php 

include_once(PATH_SRC."models".DIRECTORY_SEPARATOR."userModel.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){
        if ($_POST['action']="creerQuestions") {
         $questionEc=$_POST['questionEc'];
         $point=$_POST['point'];
         $repChoice=$_POST['repChoice'];
       
        ajouter_Question();
       
        }
       

       

        }
     }



function ajouter_Question(){
    $tabReponse=[];
    $tabChecked=[];
    //Recupere tous les champsb de saisie
    foreach ($_POST as $key => $value) 
        if(substr($key,0,4)=='rep_')
            $tabReponse[]= $value;
            var_dump($tabReponse)."<br>";die;
    //Recupere les champs checked
    foreach ($_POST['fama'] as $value) 
            $tabChecked[$value-1];
            echo $tabChecked."\n";

        
       
}
?>