<?php
  
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php");
?>
    <div id="body">
<div id="container">
    <div class="lf">
            <h2 style="margin: 3%;">Login Form</h2>
            <h3 style="margin: 3%;">X</h3>
    </div>
            
             <form action="<?=WEBROOT."?controller=securite&action=connexion"?>" method="POST" class="form">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion" >
                <?php if(isset($_SESSION['errors']['connexion'])):?>
                    <span style="color:red"><?=$_SESSION['errors']['connexion']?></span>
                <?php endif ?>
                <div class="login">
                     <input type="text" placeholder="Login" name="login"  class="type">
                     <img class="log" src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR.'ic-login.png'?>" alt="">
                </div>
                <?php if(isset($_SESSION['errors']['login'])):?>
                    <span style="color:red"><?=$_SESSION['errors']['login']?></span><br>
                <?php endif ?>
                <div class="pass">
                    <input type="password" placeholder="Password" name="password" class="type" >
                    <img class="log" src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR.'ic-password.png'?>" alt="">
                </div>
                <?php if(isset($_SESSION['errors']['password'])):?>
                   
                <span style="color:red"><?=$_SESSION['errors']['password']?></span><br>
                <?php endif ?>
                <div class="foo">
                <input type="submit" id='submit1' value='Connexion' class="submit">
                
                <a href="<?= WEBROOT."?controller=securite&action=inscription"?>"><span> S’inscrire pour jouer? </span></a>
                </div>
              
            </form>
        </div>
        </div>
<?php unset($_SESSION['errors']);?>
        <script src="<?=PATH_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
</body>
</html>
