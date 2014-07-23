<?php
$html = $_POST['html'];
$result = strlen($html);
echo ($result);
error_log($html);

$myFile = date("Y-m-j H-i-s").".htm";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $html."\n";
fwrite($fh, $stringData);
fclose($fh);

?>
