<?php
function convert_filesize($bytes, $decimals = 2){
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

function add_version_to_file($file) {
	#$explodedFileName = explode('.', $file);
	#array_splice();
	#echo $explodedFileName[1];
	return $file . "." . substr(base64_encode(md5( mt_rand() )), 0, 5);;
}
?>
