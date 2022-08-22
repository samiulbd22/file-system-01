<?php
$path = __DIR__;
$filePath =__FILE__;
$fileName = __DIR__.'./assets/text.txt';
//echo $path;
//output is->
//C:\Users\samiu\Desktop\fileSystem
echo $filePath."\n";
// output is->
//C:\Users\samiu\Desktop\fileSystem\checkout.php
//check out
$fileExists= file_exists($fileName)?"is exists":"not exists";
$isFile= is_file($fileName)?"is file":"not file";
$isDir= is_dir($fileName)?"is directory":"not directory";
echo $fileExists."\n";
echo $isFile."\n";
echo $isDir."\n";
?>
