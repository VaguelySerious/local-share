<?php

if(!empty($_FILES['file'])) {

	$file = basename($_FILES['file']['name']);
	$uploadFolder = "uploads/";
	$path = $uploadFolder . $file;

	// TODO Add suffix if filename already exists
	while (file_exists($path)) {
		$file = add_version_to_file($file);
		$path = $uploadFolder . $file;
	}

	if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
		$filesize = convert_filesize($_FILES['file']['size']);
		echo "<p>The file $file ($filesize) has been uploaded</p>";
		echo "<a href=\"/\">Upload another</a>";
	} else {
		echo "There was as error storing your file. Please check server write permissions.";
	}
} else {
	echo "Missing file in POST request.";
}


