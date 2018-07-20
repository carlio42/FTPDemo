<?php
/* connect and login to FTP server
$ftp_server = "ftp.gear.host";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

$ftp_username = "ftpdemo\$ftpdemo";
$ftp_userpass = "WnXYMs5bjgSDjDBolh1pzCWa4WfRhkMoARfwSAhhn74cvWTRWymxbKDSeJeP";

if(ftp_login($ftp_conn, $ftp_username, $ftp_userpass))
	echo "Successfully Loggedin";
else
	echo "Error";


ftp_close($ftp_conn);*/
 $filename = 'ftp://ftpdemo\$ftpdemo:WnXYMs5bjgSDjDBolh1pzCWa4WfRhkMoARfwSAhhn74cvWTRWymxbKDSeJeP@ftp.gear.host/files/wwwroot/_cont/file.txt';
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    echo $contents;
?>
