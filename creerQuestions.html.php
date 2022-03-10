<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=PATH_PUBLIC."css".DIRECTORY_SEPARATOR."style.creerQuestions.css"?>">
    <title>creerQuestions</title>
</head>
<body>
    <!-- <h1>PARAMÉTRER VOTRE QUESTION</h1> -->
<div class="containercq">
    <div class="lip">
        <label for="lab">Questions</label>
        <input type="text" class="form-control" name="question" id="lab">
    </div>
    <div class="nip">
        <label for="">Nbre de Points</label>
        <input type="NUMBER" class="nbr">
    </div>
    <div class="tip">
        <label for="">Type de réponse</label>
        <select name="" id="">
        <option value="" disabled selected>Donnez le type de reponse</option>
            <option value="" >Reponse Simple</option>
            <option value="">Reponse Multiple</option>
            <option value="">Reponse Texte</option>
        </select>
        <a href="" class="hh1"><h1>+</h1></a>
    </div>
    <div class="rinp">
       <div class="multi">
       <label for="">Reponse Multiple</label>
        <input type="text" name="" class="repo">
        <input type="checkbox" name="">
        <a href="#"><i><img src="img/ic-supprimer.png" alt="" class="img"></i></a>

       </div>
        <div class="simple">
        <label for="">Reponse Simple</label>
        <input type="text" class="repo">
        <input type="radio">

        <a href="#"><i><img src="img/ic-supprimer.png" alt="" class="img"></i></a>
        </div>
        <div class="simple">
        <label for="">Reponse Texte</label>
        <input type="text" class="repo">
        <a href="#"><i><img src="img/ic-supprimer.png" alt="" class="img"></i></a>
        </div>
</div>
<div class="Enregistrer">
        <button type="submit">Enregistrer</button>
    </div>
</div>
    
</body>
</html>