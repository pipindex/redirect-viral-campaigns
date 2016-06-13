<?php
/*
session_start();
if (!empty($_COOKIE["Remind_Me_ShawAcademy"])) {
//	echo 'hujaaaa';
	$rememberMeSecret = '91287qwhgeSDRasid328qa6as7fd9G6sd9f7D8a98q38z76xDf98s869zsfz76se7HG6e7cf76ghxbh06iyfmgd5';
    $huj = base64_decode($_COOKIE["Remind_Me_ShawAcademy"]);
    $huj = json_decode($huj);
	$sha1 = sha1($rememberMeSecret.$huj->username);
	if ( $sha1 == $huj->token ) {
		$_SESSION['logged_in'] = TRUE;
		$_SESSION['username'] = $huj->username;
		$_SESSION['last_activity'] = time();
		header( "Location:http://www.shawacademy.com/courses.php" );
		return;
	}
}
// die(); */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="fb/fb-stuff.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="fb/fb-style-con.css">
	<title>Shaw Academy</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46686710-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
mixpanel.init("20597dcff540172cf5563b343f55a3ab");</script><!-- end Mixpanel -->



<script type="text/javascript">mixpanel.track("Viral Page Signup")</script>
	</head>
<body>
	<div class="container-fluid lrg-bg">
	<div class="row" style="text-align: center; padding-bottom: 20px; padding-top: 50px">
		<div id="top-logo" class="col-md-12" >
		<img src="fb/shaw-logo-dark.svg" alt="Shaw Academy Logo" class="logo" style="height:27px" />
		</div>
	</div>
		<div class="container">
			<div id="big-box" class="col-lg-8 col-lg-offset-2 col-sm-12" style="height: 230px;">
				<div class="row top-row">
					<div class="col-sm-12 top-text">

						<h1>Thank you!</h1>
						<h3>Thank you for registering for your live course at Shaw Academy.</h3>
					</div>
				</div>
				<div class="row low-stuff">

				</div>
			</div>
		</div>
	</div>


</body>
</html>
