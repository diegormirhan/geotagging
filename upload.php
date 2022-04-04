<?php

// Getting user uploaded file

$file = $_FILES["file"];

// Saving file in directory

move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);



header("Location: index.php");



?>

