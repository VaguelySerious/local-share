<div class="files">
	<h2 class="headline">Files available for download</h>
	<ul class="files-list">
	<?php
		$excludedList = ['.', '..'];
		$uploadPath = 'uploads/';
		foreach (scandir($uploadPath) as $file) {
			// TODO Show icon for filetype instead of mime
			if (!in_array($file, $excludedList)) {
				$filePath = $uploadPath . $file;
				$mimetype = mime_content_type($filePath);
				$size = convert_filesize(filesize($filePath));
				$filename = $file;
				echo "<li class='files-list-item'><a class='files-list-link' href=\"?download=$file\">$file ($mimetype) <span class='files-list-item-size'>$size</span></a></li>";
				//include 'partials/ui/file.php';
			}
		}
		?>
	</ul>

</div>

