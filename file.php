<?php 
// day 2 variable declaration
// day 3 for loop tables 
// day 4 arrays and git 
// day 5 while loop functions include require
// day 6 how to create the files

$ourFileName = "files/testFile.txt"; // testFile which will be create in files folder if it does not exist
// check if the file is present or not then only create the file

$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");// createt the file in write mode


echo $ourFileName." file has been created ".time(); // print statement

fclose($ourFileHandle); // close the file 

?>
