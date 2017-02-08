<?php
	if($_FILES['file']['name'] != "") {
		copy($_FILES['file']['tmp_name'], "E:\phpxapm\htdocs\Java2s\File Upload\File Uploader" . $_FILES['file']['name']) or die ("Could not copy file");
	}
	else {
		die ("No file specified");
	}
?>

<html>
	<head>
		<title>Upload completed</title>
	</head>
	<body>
		<h3>File upload succeede...</h3>
		<ul>
			<li>Sent: <?php echo $_FILES['file']['name']; ?></li>
			<li>Size: <?php echo $_FILES['file']['size']; ?> bytes</li>
			<li>Type: <?php echo $_FILES['file']['type']; ?></li> 
		</ul>
		<a href="<?php echo $_FILES['file']['name']; ?>">Click here to view file</a>
	</body>
</html>