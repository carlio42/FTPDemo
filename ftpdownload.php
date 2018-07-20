<?php
// connect and login to FTP server
/*$ftp_server = "ftp.drivehq.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

$ftp_username = "sb1510@outlook.com";
$ftp_userpass = "sunilbehera123";

$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "_cont/file.txt";
$serverFile = "userpropics/user.txt";

// download file
if (ftp_get($ftp_conn, $file, $serverFile, FTP_ASCII))	//1st:Local File Path, 2nd: Server File
  {
  echo "Successfully downloaded .";
  }
else
  {
  echo "Error in download .";
  }

// close connection

ftp_close($ftp_conn);
*/
$file = "_cont/file.txt";
$serverFile = "user.txt";

move_uploaded_file($serverFile, $file);
?>
