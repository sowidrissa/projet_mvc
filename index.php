<?php
// echo "Nous sommes dans le front controllerer";
if(session_status()==PHP_SESSION_NONE){
    session_start();
}

//inclusion des constantes
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";

//inclusion du validator
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."validator.php";

//inclusion des roles
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."role.php";


//inclusion du orm
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php");
//inclusion du routeur
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";

?>
