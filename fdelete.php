<?php

$myFile = "files/dummy.txt"; // file name to be deleted

unlink($myFile); // function to delete the file

echo "$myFile file is deleted ".time();

?>
