<?php
$html = $_POST['html'];
$folder = "./Captured/";

$myFile = $folder.date("Y-m-j H-i-s").".htm";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $html."\n";
fwrite($fh, $stringData);
fclose($fh);

?>
