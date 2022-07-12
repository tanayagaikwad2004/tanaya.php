<?php
//day 7
// http://localhost/session/signin

session_start();// session start

$first_name = "Tanaya";
$last_name = "Gaikwad";
$age = "18";

$_SESSION['name'] = $first_name."".$last_name
$_SESSION['age'] = $age; // set session

echo"<pre>";
print_r($_SESSION); // print the variable of 
// session is destroyed in signout.php page 
echo "</pre>";
?>
