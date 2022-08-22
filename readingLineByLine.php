<?php
$fileName=__DIR__.'./assets/us_presidents.csv';
$handle=fopen($fileName,"r");
if ($handle){
    while (!feof($handle)){
        $row=fgets($handle);
        $array=explode(',',$row);
        echo $array[1].PHP_EOL;
    }
    fclose($handle);
}
else{
    echo "file could not open";
}

?>