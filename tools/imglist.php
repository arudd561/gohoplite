<!DOCTYPE html>
<html>
	<head>
		<title>File Uploader</title>
	</head>
	<body>
	
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<?php
if ($handle = opendir('/path/to/files')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }

    /* This is the WRONG way to loop over the directory. */
    while ($entry = readdir($handle)) {
        echo "$entry\n";
    }

    	closedir($handle);
	}

		if(count($_FILES) > 0) {
			$message = "";
			$target_path = "/var/www/uploads/" . basename( $_FILES['userFile']['name']);
			echo "<div>" . ((move_uploaded_file($_FILES['userFile']['tmp_name'], $target_path))
				? ("The file ".  basename( $_FILES['userFile']['name']). " has been uploaded")
				: "There was an error uploading the file, please try again!") . "</div>";
			echo "Select another file to upload:";
		}
		else {
			echo "Select a file to upload:";
		}
	?>

	    <input type="file" name="userFile" id="fileToUpload">
	    <input type="submit" value="Upload" name="submit">
	</form>
	
	</body>
</html>

