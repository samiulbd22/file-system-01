<?php
$fileName = __DIR__.'./assets/text.txt';
$handle=fopen("$fileName","r");
if ($handle)
{
    echo "file is opened";
    fclose($handle);
}
else{
    echo "File could not open";
}
?>
