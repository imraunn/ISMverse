<?php
    if(isset($_GET['uname']) && isset($_GET['pass'])){
        $uname=$_GET['uname'];
        $pass=$_GET['pass'];
        if($uname==="hacker" && $pass==="ism_bhaukali"){
            ob_start();
            header('Location: t0p_s3cr3t_d3vice_tr4cker.php');
            ob_end_flush();
            die();
        }
    }
?>
<html>
<head>
    <title>Secret portal</title>
    <style>
        * {
        box-sizing: border-box;
        }

        *:focus {
            outline: none;
        }
        body {
        font-family: Arial;
        background-color: #3498DB;
        padding: 50px;
        }
        .login {
        margin: 20px auto;
        width: 300px;
        }
        .login-screen {
        background-color: #FFF;
        padding: 20px;
        border-radius: 5px
        }

        .app-title {
        text-align: center;
        color: #777;
        }

        .login-form {
        text-align: center;
        }
        .control-group {
        margin-bottom: 10px;
        }

        input {
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 10px 0;
        width: 250px;
        transition: border .5s;
        }

        input:focus {
        border: 2px solid #3498DB;
        box-shadow: none;
        }

        input[type=submit] {
        border: 2px solid transparent;
        background: #3498DB;
        color: #ffffff;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        box-shadow: none;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
        }

        .btn:hover {
        background-color: #2980B9;
        }

        .login-link {
        font-size: 12px;
        color: #444;
        display: block;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
            <form action="" method="get" id="login_form">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="uname">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="submit"></input>
			</div>
            </form>
		</div>
	</div>
</body>
</html>