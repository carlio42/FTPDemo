# FTPDemo
The demo uploads file to a preexisting server and downloads from it. 
Here the important issue is with the _cont which must be writeable otherwise
the download will fail. 
Cleanup code is required. (After dowlnoad we need to remove the download from _cont)
