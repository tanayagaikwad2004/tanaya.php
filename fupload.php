<?php 

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

// move_uploaded_file is responsible to upload the file

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>

<form enctype="multipart/form-data" action="fupload.php" method="POST">

    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />

    Choose a file to upload: <input name="uploadedfile" type="file" /><br /> <!-- text --> 

    <input type="submit" value="Upload File" />

</form
