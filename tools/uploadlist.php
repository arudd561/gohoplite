<!DOCTYPE html>
<html>
	<head>
		<title>Uploads Listing</title>
	</head>
	<body>
	
	<?php
            if ($handle = opendir(getcwd() . "/uploads/")) {
            echo "Directory handle: $handle\n";
            echo "Files:\n";

            /* This is the correct way to loop over the directory. */
            while (false !== ($entry = readdir($handle))) {
                echo "<a href=\"images/" . $entry ."\">" . $entry . "</a>";
            }

            closedir($handle);
            }
        ?>
	</body>
</html>

