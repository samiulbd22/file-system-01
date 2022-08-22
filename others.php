<?php
$fileName=__DIR__.'./assets/shakespeare_sonnet.txt';
echo filemtime($fileName).PHP_EOL;
echo strftime("%d-%m-%y",filemtime($fileName)).PHP_EOL;
echo strftime("%d-%m-%y",fileatime($fileName)).PHP_EOL;
echo strftime("%d-%m-%y",filectime($fileName)).PHP_EOL;
?>
