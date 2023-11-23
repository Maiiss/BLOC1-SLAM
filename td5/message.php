<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </title>message</title>
</head>
<body>
<?php
extract($_GET);
$message??="Hello World!";
$color??='black';
$size??='15';
$italic=isset($ckItalic)?";font-style: italic":"";
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="tapez votre message">
            <?=$message?>
        </textarea>
    </div>
    <div>
    	<label for="color">Couleur</label>
    	<input type="color"id="color" name="color" value="$color?">
    </div>
    <div>
        <label for="size">Taille :</label>
        <input type="number"id="size" name="size" value="$size?>">
    </div>
    <div>
    	<input type="checkbox" id="ckBold" name="ckbold">
    	<label for="ckBold">Gras</label>
    	<input type="checkbox" id="ckItalic" name="ckitalic">
    	<label for="ckBold">Italique</label>
    </div>
     <button type="submit" method="POST">Valider</button>

</form>
<p style="color:<?=$color ?>; font-size: <?=$size?>px; <?=$italic?>;">
    <?=$message?>
</p>
<h2>URLs de test</h2>
<ul>
    <li>
        <a href="?message=Texte en vert de taille 20&size=20&color=green">Vert</a>
    </li>
    <li>
        <a href="?message=Texte en rouge de taille 30&size=30&color=red">Rouge</a>
    </li>
    <li>
        <a href="?message=Texte en bleu de taille 50&size=50&color=blue">Bleu</a>
    </li>
</ul>
</p>

<form method="POST"></form>
<h2>Generateur de paragraph</h2>
<div>
    <label for="paragraph">Numbre de paragraphes shouaiter :</label>
    <input type="number" id="paragraph" name="para" value="$paragraph,>"min="1" max="30">
    <button type="submit" >Générer</button>

</div>





</body>
</html>