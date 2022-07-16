<?php
/*
To erase all the data from our testFile.txt file we need to open the file for normal writing. 
All existing data within testFile.txt will be lost.
*/

$myFile = "files/testFile.txt";
$fh = fopen($myFile, 'w');// fopen will erase all the previous content present in the file
fclose($fh);

// all the contents will be erased once the program is executed
?>
