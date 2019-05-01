<?php

$ch = curl_init();
$localfile = '/Users/vasko.mihaylov/Downloads/vasko/localfile.txt';
$remotefile = 'filename.zip';
$fp = fopen($localfile, 'r');
curl_setopt($ch, CURLOPT_URL, 'ftp://QZ%0uo9&iy:BCCE_CoofCars@ftp1.trader.com/'.$remotefile);
curl_setopt($ch, CURLOPT_UPLOAD, 1);
curl_setopt($ch, CURLOPT_INFILE, $fp);
curl_setopt($ch, CURLOPT_INFILESIZE, filesize($localfile));
curl_exec ($ch);
$error_no = curl_errno($ch);
curl_close ($ch);
if ($error_no == 0) {
	    $error = 'File uploaded succesfully.';
} else {
	    $error = 'File upload error.';
}

?>
