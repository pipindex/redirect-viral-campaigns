<?php
session_start();
if (!empty($_COOKIE["Remind_Me_ShawAcademy"])) {
	$rememberMeSecret = '91287qwhgeSDRasid328qa6as7fd9G6sd9f7D8a98q38z76xDf98s869zsfz76se7HG6e7cf76ghxbh06iyfmgd5';
    $huj = json_decode($_COOKIE["Remind_Me_ShawAcademy"]);
	$sha1 = sha1($rememberMeSecret.$huj->username);
	if ( $sha1 == $huj->token ) {
		$_SESSION['logged_in'] = TRUE;
		$_SESSION['username'] = $username;
		$_SESSION['last_activity'] = time();
		header( "refresh:1;url=http://www.shawacademy.com/courses.php" );
		return;
	}
}
// var_dump ($_SESSION);
// die();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="fb-stuff.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="fb-style.css"> 
	<title>Shaw Academy</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Montserrat' rel='stylesheet' type='text/css'>
	</head>
<body>
	<div class="container-fluid lrg-bg">
		<div class="container">
			<div class="row top-row">
				<div class="col-sm-12 top-text">
					<img src="ShawAcademy-Logo.png" alt="Shaw Academy Logo" class="logo" />
					<h1>Are you ready to start learning today?</h1>
					<p>Join over 500,000 graduates and get access to the best live education on the planet</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 text-center log">
					<p class="top-thing">Exisiting User?</p>
					<form id="log" action="http://www.shawacademy.com/login.php#generic-form" method="POST">
					<label>User Name / Email ID</label>
					<input class="form-control-rk" type="text" name="user" placeholder="Enter your Username">
					<label>Your Password</label>
					<input class="form-control-rk" name="passwordfld" type="password" placeholder="Enter your password">
					<div class="btns" style="margin: 0px -50px">
						<a href="#log" id="loger" class="btn">Log In <img src="nav-orange.svg" title="Log In" /></a>
						</div>
					</form>
				</div>
				<div class="col-sm-6 text-center reg">
					<p class="top-thing">New User?</p>
					<div class="row steps">
						<div class="col-sm-4">
							<img src="step1.svg" alt="Select Your Course" />
							<p>1-Select Your Course</p>
						</div>
						<div class="col-sm-4">
							<img src="step2.svg" alt="Start Learning" />
							<p>2-Start Learning</p>
						</div>
						<div class="col-sm-4">
							<img src="step3.svg" alt="Succeed" />
							<p>3-Succeed</p>
						</div>
					</div>
					<div class="row">
						<div class="btns">
							<p>Not registered yet? Click here</p>
							<a href="http://www.shawacademy.com/learning/?product=sa-social&lang=en" class="btn">Enroll Now <img src="nav-white.svg" title="Enroll Now" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>