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
			
			echo (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path))
				? ("The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded")
				: "There was an error uploading the file, please try again!"
			?>
			Select another file to upload:
			<?php
		}
		else {
			?>
			Select a file to upload:
			<?php
		}
	?>
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload" name="submit">
	</form>
	
	</body>
</html>

