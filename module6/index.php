<?php 

//fopen
  $my_file = fopen("file1.text","w");
  
  ///content

fclose($my_file);

$filename = "ds.txt";

$file = fopen($filename,"r");

$size= filesize($filename);

$my_filedata = fread($file,$size );
echo $my_filedata . "<br>"

fclose($file);

$my_file =fopen("exampel.txt", "r");

while(!feof($my_file)) {
    echo fgets($my_file) . "<br>";
}

$my_file = fopen("file1.txt", "w");

$text = "computer programing";

fwrite($my_file, $text);

$my_file =fopen ("data.txt","a+");

fwrite($my_file, "Data test 2");

?>