<?php
$fileName=__DIR__.'./assets/text.txt';
echo is_readable($fileName)?"Yes readable":"Not Readable";
echo is_writable($fileName)?"Yes writable":"Not writable";
echo is_executable($fileName)?"Yes executable":"Not executable";
?>
