<?php
	$con=mysqli_connect("localhost","hackfest","<<REDACTED_PASSWORD>>","metaverse");
	if(!$con){
		echo "Connection Unsuccessfull!";
		die();
	}
?>