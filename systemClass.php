<?php 
session_start();

class SystemClass{
	static function printHead($stylePath){
		echo "
		<head>
			<meta charset='UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<title>Document</title>
			<link rel='stylesheet' href='$stylePath'
		</head>
		";
	}

	static function dbConnect(){
		require_once"config.php";
		return new mysqli($host, $db_user, $db_password, $db_name);
	}

	static function blockEntraceNotsigned($movo_to) {
		if(!isset($_SESSION['signedIn'])){
			header("Location: $move_to");
		}
	}

	static function blockEntraceSigned($move_to) {
		if(isset($_SESSION['signedIn'])){
			header("Location: $move_to");
		}
	}
}