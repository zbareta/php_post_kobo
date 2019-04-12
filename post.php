<?php
if (function_exists('curl_file_create')) {
	$cFile = curl_file_create(realpath("test.xml"));
} else {
	$cFile = '@' . realpath("test.xml");
}
$post = array('xml_submission_file'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://kobocat.unhcr.org/submission");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "USERNAME:PASSWORD");
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result=curl_exec($ch);
curl_close ($ch);
?>
