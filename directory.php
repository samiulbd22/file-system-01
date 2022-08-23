<?php
/*
dirname("","");
is_dir("");
file_exists("");
is_writable("");
getcwd();
chdir("");
mkdir("","","","");
rmdir("","");
opendir("","");
readdir("");
closedir("");
scandir("","","");
print_r("","");
strftime("","");
strlen("");
strpos("","","");
glob("","");

//File Upload
$_FILES[""];
file_get_contents("","","","","");
move_uploaded_file("","");
*/
$filename = __DIR__.'./assets/text.txt';
 echo dirname($filename);
 echo "\n";
 echo file_exists($filename)?"yes file exists":"No file Exists";
echo "\n";
 echo is_dir(__DIR__.'./assets/')?"Yes Dir":"No Dir";
echo "\n";
 echo is_writable($filename)?"Yes Writable":"No writable";
echo "\n";
 getcwd();
 $file=chdir(__DIR__.'./assets/');
 echo $file;
echo "\n";
echo getcwd().PHP_EOL;
chdir('..');
echo getcwd().PHP_EOL;
chdir(__DIR__.'./assets');
echo getcwd().PHP_EOL;
//mkdir('example');
if (!is_dir("text2")){
    getcwd();
    mkdir("text2");
}
else{
    rmdir("text2");
}
$file=opendir(__DIR__.'./assets');
echo $file;
var_dump(readdir($file));
closedir($file);

?>