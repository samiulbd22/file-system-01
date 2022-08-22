<?php
$fileName=__DIR__.'./assets/shakespeare_sonnet.txt';
$handle=fopen($fileName,"r");
// reading for line....
$line=fgets($handle);
//reading for character....
$line=fgetc($handle);
var_dump($line);

?>