<?php
$dirpath = __DIR__;
$handle = opendir($dirpath);
if ($handle)
{
    //echo "successfully";
//    $entry=readdir($handle);
//    print_r($entry);
    while (false !==($entry=readdir($handle))){
        if ($entry=='.'|| $entry=='..'){continue;}
        if (strpos($entry,'.')==0){continue;}
        if (is_dir($entry.'/'.$entry)){continue;}
        echo $entry.PHP_EOL;
    }
    closedir($handle);
}
else{
    echo "file could not open";
    $array =scandir($dirpath);
    echo $array[3];
}
?>
