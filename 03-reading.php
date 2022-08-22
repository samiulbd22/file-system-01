<?php
//$fileName = __DIR__.'./assets/text.txt';
$fileName = __DIR__.'./assets/lorem_ipsum.txt';
$handle=fopen("$fileName","r");
$byte=filesize($fileName);
var_dump($byte);
if ($handle)
{
    $read=fread($handle,$byte);

    fclose($handle);
}
else{
    echo "File could not open";
}
echo $read;
?>