<?php
function ourErrorHandler($errno, $errstr, $errfile, $errline)
{
	if (!error_reporting() && $errno) {
		// Mã lỗi này không có trong error_reporting
		return;
	}
	$error_output = '';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$time = date("d-m-Y h:i:s");
	switch ($errno)
	{
		case E_USER_ERROR: $error_output .= $time.': '.$errstr. ' trên dòng '.$errline.' trong file '.$errfile;break;
			
	}
	file_put_contents(__SITE_PATH.'\includes\logs\error.txt',file_get_contents(__SITE_PATH.'\includes\logs\error.txt').'|||||||'.$error_output);
}

$error_handler = set_error_handler("ourErrorHandler");
?>