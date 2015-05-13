<!DOCTYPE html>
<html>
	<head>
		<title>File Uploader</title>
	</head>
	<body>
	
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<?php
		if(count($_FILES) > 0) {
			$message = "";
			$target_path = "uploads/";

			$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
			echo (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path))
				? ("The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded")
				: "There was an error uploading the file, please try again!";
			echo "Select another file to upload:";
		}
		else {
			echo "Select a file to upload:";
		}
	?>
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload" name="submit">
	</form>
	
	</body>
</html>

