<?php
	$thelist = "";
	if ($handle = opendir('upload')) {
		while (false !== ($file = readdir($handle))) {
			if ($file == "." || $file == "..") {
				continue;
			} else { 
				$thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
			}
		}
		closedir($handle);
	}
?>
<h1>List of files:</h1>
<ul><?php echo $thelist; ?></ul>