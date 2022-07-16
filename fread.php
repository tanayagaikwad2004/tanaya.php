<?php
$myFile = "files/testFile.txt";
$fh = fopen($myFile, 'r') or die("Can't open file'");
$theData = fread($fh, filesize($myFile));// read all the content of the file
fclose($fh);
echo $theData;
echo "<br>\n";
echo "$myFile size is => ". filesize($myFile);
?>
