<?php 
    require_once 'fonction.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?=titre("Generateur", "sans pub", 1)?>
<form method="post">
    <label for="paragraphe">Generateur de paragraphes</label>
    <input type="number"id="paragraphe" name="paragraphe" value="$paragraphe,>">
    <button type="submit" >Générer</button>
</form>

<?php
$j=0;
$LOREMIPSUMARRAYSIZE=count(LOREM_IPSUM_ARRAY);
for($i=0;$i<$count;$i++){
    $j=rand(0,$LOREMIPSUMARRAYSIZE-1);
    titre("Para $i", level:6);
    echo "<div>".shufflepara(LOREM_IPSUM_ARRAY[$i])."</div>";

}
?>
</form>
</body>
</html>
 