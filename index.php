<?php
?>
<html>
	<title>FTP Demo</title>
	<body>
		<a href='ftpdownload.php'>FTP Download</a>
		<br><br>
		<a href='ftpupload.php'>FTP Upload</a>
		<form action='ftpdownload.php' method='POST' enctype='multipart/form-data'>
			<input type='file' name='file'>
			<button type='submit' name='submit'>Upload</button>
		</form>
	</body>
</html>
