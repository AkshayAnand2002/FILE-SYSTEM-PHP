<?php
/*
FILE SYSTEM IN PHP.
*/
$file = fopen('./example.txt', 'w');//w -> write
fwrite($file, 'hello world!!' . PHP_EOL);
fclose($file);
$file = fopen('./example.txt', 'a');//a -> append
fwrite($file, 'hello world again!!' . PHP_EOL);
fclose($file);
$file = fopen('./example.txt', 'r');//r -> read
$line = fgets($file);
while($line != false){
    echo $line;
    $line = fgets($file);
    //fgets for reading file line by line.
}
fclose($file);
?>