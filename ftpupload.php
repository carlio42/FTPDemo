<?php
// connect and login to FTP server
$ftp_server = "ftp.drivehq.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

$ftp_username = "sb1510@outlook.com";
$ftp_userpass = "sunilbehera123";

$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "user.txt";


// upload file
if (ftp_put($ftp_conn, "/userpropics/user.txt", $file, FTP_ASCII)) //1st: SERVER FILE 2nd:LOCAL FILE
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }

// close connection

ftp_close($ftp_conn);
?>
