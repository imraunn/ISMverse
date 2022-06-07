<?php
	include 'secret.php';
	include 'connection.php';	
	function my_is_int($var) {
		return preg_match('/^\d+$/', $var);
	}

	if (isset($_SERVER['HTTP_ORIGIN'])) {
		header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Max-Age: 86400');    // cache for 1 day
	}
	if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

		if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
			header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

		if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
			header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

		exit(0);
	}


	if(isset($_POST["userName"]) && isset($_POST["level"]) && isset($_POST["signature"])){
        $userName=mysqli_real_escape_string($con,$_POST["userName"]);
		$level=mysqli_real_escape_string($con,$_POST["level"]);
		$signature=mysqli_real_escape_string($con,$_POST["signature"]);

		$concatenatedText=$userName.$level.$secret;
		$mysignature=sha1($concatenatedText);

		if($signature==$mysignature){
			if(my_is_int($level) && $level<=10){
				$query=mysqli_query($con,"UPDATE player SET level=".$level." WHERE userName='$userName';");
			}
			else{
				echo "-1";
			}
		}
		else{
			echo "Invalid signature";
			die();
		}
	}
?>
