<?php

if (isset($_GET['download'])) {
	$filepath = 'uploads/' . $_GET['download'];

	// Strictly compare input to a list of filenames that are valid
	if (!in_array($_GET['download'], scandir('uploads'))) {
		echo "This file does (no longer?) exist. Don't go trying weird things.";
		include 'partials/footer.php';
		exit;

	// Send the actual file
	} else if (file_exists($filepath)) {
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		header('Content-Type: ' . finfo_file($finfo, $filepath));
		finfo_close($finfo);

		//Use Content-Disposition: attachment to specify the filename
		header('Content-Disposition: attachment; filename='.basename($filepath));

		//No cache
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');

		//Define file size
		header('Content-Length: ' . filesize($filepath));

		ob_clean();
		flush();
		readfile($filepath);
		exit;
	}
}

?>
