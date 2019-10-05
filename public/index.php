<?php
include 'partials/library.php';
include 'partials/header.php';

// Download
include 'partials/download_action.php';

// Upload Form/Confirmation
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	include 'partials/upload_form.php';
} else {
	include 'partials/upload_progress.php';
}

// Download List
include 'partials/download_list.php';

include 'partials/footer.php';
?>
