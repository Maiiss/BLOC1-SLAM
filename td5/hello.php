<?php

$content="Hello Wolrd";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php
		echo "$content";
		?>
	</title>
</head>
<body>
<?php
echo $content;
?>
</body>
</html>