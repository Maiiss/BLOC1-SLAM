<?php
declare(strict_types=1);

function titre(string $content,string $subTitle='',int $level=1): void {
    echo "<h$level>$content</h$level>";
    if ($subTitle!=null){
        echo "<p class='sub-title'>$subTitle</p>";
    }
}

function get(string $key,mixed $defaultValue=null): mixed{
	return $_GET[$key]??$defaultValue;
}

function post(string $key,mixed $defaultValue=null): mixed{
	return $_POST[$key]??$defaultValue;
}

function shufflepara(string $paragraph): string{
	$words=explode("",$paragraph);
	shuffle($words);
	return ucfist(implode("",$words));
}

function generatetable(int $lign,int $cols): string {
	$html='<table>';
	for ($i=0;$i<$lign;$i++) { 
		$html.='<tr>';
		$html.= str_repoeat("<td>$defaultValue</td>", $cols);
	}
	$html='</table>';
	return $html;
}

const LOREM_IPSUM_ARRAY=[
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare tellus posuere, pellentesque nulla venenatis,", 
	"hendrerit mauris. Maecenas mattis ex nec ex faucibus dapibus. Suspendisse fringilla ipsum sit amet dapibus", 
	"Nam pulvinar, leo ac pretium pharetra, dui augue accumsan leo, at faucibus elit libero vel lectus. Nullam sapien",
	"lacus, euismod vitae rutrum vel, egestas at mauris. Aenean auctor luctus risus. Donec mauris nisi, ullamcorper quis",
	"dictum sed, pellentesque sit amet lorem. Praesent elementum enim sed ipsum scelerisque, nec dapibus justo aliquam.", 
	"Mauris ornare dolor in massa porttitor, non facilisis urna bibendum. Sed id sagittis nulla. Vestibulum vehicula quam",
	"vestibulum, dapibus dolor ac, mollis lorem.",
];
?>
