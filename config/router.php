<?php
// echo "<br>Nous sommes dans le router<br>";
if(isset($_REQUEST['controller'])){
    // echo "<br>le controller existe<br>";
    switch($_REQUEST['controller']){
        case "securite":
// echo "<br>En route vers le controller=securite<br>";
            require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."securiteControllers.php");
            break;
        case "user" :
            // echo "<br>Eb route vers le controller=user<br>";
            require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."userControllers.php"); 
            break;
        default:
        // echo "<br>En route vers un chemin inconnue<br>";
            echo "Controller inconnue" ;   
            break;
            }
}else{
    // echo "<br>le controller n'existe pas<br>";
     require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."securiteControllers.php");
}