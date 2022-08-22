<?php
$fileName=__DIR__.'./assets/text.txt';
$handle =fopen($fileName,"w");
$data="it is an independent country";
$data2="Hey boy which country are you loving?";
if ($handle)
{
    if (fwrite($handle,$data))
    {
        echo file_get_contents($fileName);
    }else{
        echo "success";
    }
    fclose($handle);
}
else
{
    echo "file could not open";
}
file_put_contents($fileName,$data2);
echo file_get_contents($fileName);

?>