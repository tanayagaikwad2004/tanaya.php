<?php 

// declare array
$cars = array (
    array("Volvo",22,18,43),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  // to format array properly use pre tag
echo "<pre>";
print_r($cars);
echo "</pre>";

// echo $cars[0][0]; // access multi dimesional arrays using index position

// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


for ($row = 0; $row < count($cars); $row++) { //  rows 
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    for ($col = 0; $col < count($cars[$row]); $col++) { // iterating array to display index position array values
      echo "<li>".$cars[$row][$col]."</li>";
    }
    
    echo "</ul>";
  }

?>
Footer
© 2022 GitHub
