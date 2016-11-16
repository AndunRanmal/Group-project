<html>
<head>
	<title>image upload</title>
</head>
<body>
<div id="content">
	<form method="post" action="index.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<input type="submit" name="upload" value="Upload Image">
		</div>
	</form>
</div>
</body>
</html>