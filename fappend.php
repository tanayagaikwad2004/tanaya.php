<?php
$myFile = "files/testFile.txt"; // filename

// Append mode
$fh = fopen($myFile, 'a') or die("can't open file");// 2 parameters passed to fopen name and mode[r||w||a]
// modes => [Read || Write || Append]

$stringData = "England\n";

fwrite($fh, $stringData);

$stringData = "USA\n";

fwrite($fh, $stringData);

fclose($fh);

echo "File content is been written in $myFile ".time();

?>
