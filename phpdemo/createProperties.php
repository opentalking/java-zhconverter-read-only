<?php
require_once("ZhConversion.php");

#print_r($zh2Hant);


$myFile = "zh2Hant.utf8properties";
$fh = fopen($myFile, 'w');

foreach ($zh2Hant as $key => $value) {
    fwrite($fh, $key.'='.$value."\n");
}
fclose($fh);

$myFile = "zh2Hans.utf8properties";
$fh = fopen($myFile, 'w');
    
foreach ($zh2Hans as $key => $value) {
	fwrite($fh, $key.'='.$value."\n");
}
fclose($fh);    



?>