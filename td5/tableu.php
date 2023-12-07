<?php
require_once 'fonction.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML Table generator</title>
</head>
<body>
<?php
	 $nbCols=post("colonnes", 5);
	 $nblignes=post("ligne", 5);
?>
<form method="post">
	<label for ="colonnes">Nombre de colonnes</label>
		<input type="number" value="<?=$nbCols?>" name="colonnes" id="colonnes"><br>
	<label for ="ligne">Nombre de ligne</label>
		<input type="number" value="<?=$nblignes?>" name="ligne" id="ligne">
	<input type="button" value="submit" name="cree" id="cree">
</form>
<hr>
<?=generatetable()?>

</body>
</html>