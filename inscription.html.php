
<?php
    // require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php");
?>
<div id="container-inscription">

    <div id="gauche" >

            <div id="entete-inscription">
                <h1>S'INSCRIRE</h1>
                <span id="span-ins">Pour tester votre niveau de culture générale</span>
                <hr>
            </div>

            <form action="<?= WEBROOT ?>" id="form-ins" method="POST">
            <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="inscription" >
              
                <label for="prenom" class="label-inscription">Prénom</label>
                <input type="text" name="prenom"  id="prenom" class="text">
                <?php if(isset($errors['prenom'])):?>
                    <span style="color:red; font-size:14px"><?=$errors['prenom']?></span><br>
                <?php endif ?>

                <label for="nom" name="nom" class="label-inscription">Nom</label>
                <input type="text" name="nom"  id="nom" class="text">
                <?php if(isset($errors['nom'])):?>
                    <span style="color:red; font-size:14px"><?=$errors['nom']?></span>
                <?php endif ?>

                <label for="login" class="label-inscription">Login</label>
                <input type="text" name="login" id="login" class="text">
                <?php if(isset($errors['login'])):?>
                    <span style="color:red; font-size:14px"><?=$errors['login']?></span>
                <?php endif ?>
                

                <label for="password" class="label-inscription">Password</label>
                <input type="password" name="password" id="password" class="pass">
                <?php if(isset($errors['password'])):?>
                    <span style="color:red; font-size:14px"><?=$errors['password']?></span>
                <?php endif ?>

                <label for="password2" class="label-inscription">Confirmer Password</label>
                <input type="password" name="password2" id="password2" class="pass">
                <?php if(isset($errors['password2'])):?>
                    <span style="color:red; font-size:14px"><?=$errors['password2']?></span>
                <?php endif ?>

                <div id="fichier"> 
                    <span id="avatar"> Avatar</span>
                    <label for="file" id="choix">Choisir un fichier</label>
                    <input type="file" id="file">
                </div>

                <button type="submit" name="inscription" id="inscription">Créer compte</button>
                
            </form>

    </div>

    <!-- <div id="droite">
        <div id="logo-img">
        <img src="<?= PATH_PUBLIC.'img/idrissa.jpeg' ?>" id="icone" srcset="" alt="" width="150px" height="150px" >
        </div> 
       <h4 id="h4-lo">Avatar du joueur</h4>
    </div> -->

</div>
<?php
    // require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php");
?>
