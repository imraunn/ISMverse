<?php
	include 'secret.php';
	include 'connection.php';
	if(isset($_POST["userName"]) && isset($_POST["signature"])){
		$userName=mysqli_real_escape_string($con,$_POST["userName"]);
		$signature=mysqli_real_escape_string($con,$_POST["signature"]);

		$concatenatedText=$userName.$secret;
		$mysignature=sha1($concatenatedText);

		if($signature==$mysignature){
			$query=mysqli_query($con, "SELECT level FROM player WHERE userName='".$userName."';");
			$row=mysqli_fetch_array($query);
			$level=$row['level'];
			echo $level;
		}
		else{
			echo "Invalid signature";
			die();
		}
	}
?>
