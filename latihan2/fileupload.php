<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form untuk input nama file</title>
</head>
<body>
	<h1>Input nama file untuk Upload</h1>
	<br>Klik Browse untuk memilih !
	<form enctype="multipart/form data-data" method="post" action="do_upload.php">

	<input type="hidden" name="MAX_FILE_SIZE" value="10000">
	Nama File : <input type="file" name="file1" size="30">
	<br>
	<input type="submit" value="upload">
</form>
</body>
</html>