<div>
	<h2>Files available to download:</h2>
	<ul>
	<?php
		$excludedList = ['.', '..'];
		$uploadPath = 'uploads/';
		foreach (scandir($uploadPath) as $file) {
			// TODO Show icon for filetype instead of mime
			if (!in_array($file, $excludedList)) {
				$filePath = $uploadPath . $file;
				$mimetype = mime_content_type($filePath);
				$size = convert_filesize(filesize($filePath));
				echo "<li><a href=\"?download=$file\">$file ($mimetype) ($size)</a></li>";
			}
		}
		?>
	</ul>

</div>

