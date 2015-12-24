<!DOCTYPE html>
<html>
	<head>
		<title>Uploads Listing</title>
		<style type="text/css">
			a { display: block; }
		</style>			
	</head>
	<body>
	
	<?php
            if ($handle = opendir(getcwd() . "/uploads/")) {
            echo "Files:\n";

            /* This is the correct way to loop over the directory. */
	    while (false !== ($entry = readdir($handle))) {
		if($entry === "." || $entry === "..") { continue; }
                echo "<a href=\"uploads/" . $entry ."\">" . $entry . "</a>";
            }

            closedir($handle);
            }
        ?>
	</body>
</html>

