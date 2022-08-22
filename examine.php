<?php

$fileName = __DIR__ . './assets/text.txt';
$path=pathinfo($fileName);
//var_dump($path);
echo "dirname is ". $path['dirname'].PHP_EOL;
echo "base name is ". $path['basename'].PHP_EOL;
echo "extension is ". $path['extension'].PHP_EOL;
echo "filename is ". $path['filename'].PHP_EOL;
echo "===========================".PHP_EOL;
echo dirname($fileName).PHP_EOL;
echo basename($fileName);



/*
             * output
 C:\Users\samiu\Desktop\fileSystem>php examine.php
dirname is C:\Users\samiu\Desktop\fileSystem./assets
base name is text.txt
extension is txt
filename is text
===========================
C:\Users\samiu\Desktop\fileSystem./assets
text.txt
C:\Users\samiu\Desktop\fileSystem>
 */
?>
