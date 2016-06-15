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
	require('helper.php');
$lang = $_GET['lang'];
$coursesDates = getDates($_POST['course'],$lang);
foreach ($courses as $key => $Course) {
	$courseDates[$key] = getDates($key,$lang);
}	
	?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="fb/intel/intlTelInput.min.js"></script>
		<script src="fb/intel/utils.js"></script>
		<script src="fb/datepicker/js/bootstrap-datepicker.js"></script>
		<script src="fb/datepicker/js/locales/bootstrap-datepicker.es.js"></script>
		<script src="fb/datepicker/js/locales/bootstrap-datepicker.de.js"></script>
		<script src="fb/datepicker/js/locales/bootstrap-datepicker.fr.js"></script>
		<title>Shaw Academy</title>
		<!-- Bootstrap core CSS -->
		<link href="fb/bootstrap.min.css" rel="stylesheet">
		<!-- FontAwesome -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Sliders -->
		<link rel="stylesheet" href="fb/owl.carousel.css">
		<link rel="stylesheet" href="fb/owl.theme.css">
		<!-- SlideMenu -->
		<link rel="stylesheet" href="fb/jquery.sidr.dark.css">
		<!-- Animate css -->
		<link href="fb/animate.css" rel="stylesheet">
		<!-- Cookies -->
		<link href="fb/cookiecuttr.css" rel="stylesheet">
		<link href="fb/questions.css" rel="stylesheet">
		<link href="fb/redesign-style.css" rel="stylesheet">
		<link rel="stylesheet" href="fb/intel/css/intlTelInput.css">
		<link rel="stylesheet" href="fb/datepicker/css/datepicker.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Google Analytics Script -->
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
			mixpanel.init("20597dcff540172cf5563b343f55a3ab");
		</script><!-- end Mixpanel -->    
		<script type="text/javascript">mixpanel.track("Viral Page View")</script>
		<script>
			courseDates = <?= json_encode($courseDates); ?> ;
			lang = <?= json_encode($lang); ?>;
		</script>
		<script src="https://cdn.optimizely.com/js/4617785256.js"></script>
	</head>

	<body>
		<header>
			<div id="logo-div">
				<div id="shaw-logo-div"> <img id="desktop-logo" src="/fb/images/shaw2.svg" alt="Shaw Academy"> 
					<img id="mobile-logo" src="/fb/images/just-s.svg">
				</div>
			</div>
		</header>
		<section id="reg-display">
			<div id="left-side">
				<h1> <?= translateLabel("You're about to join the Future of Education",$translations) ?>  </h1>
				<h3> <?= translateLabel("Attend",$translations) ?> - <?= translateLabel("Interact",$translations) ?> - <?= translateLabel("Learn",$translations) ?> - <?= translateLabel("Succeed",$translations) ?></h3>
			</div>
			<div id="right-side" class="thankyou">
				<section>
					<img src="fb/images/tick.svg" alt="Tick Image" width="74" height="74">
					<h1><?= translateLabel('Thank You',$translations) ?></h1>
					<p><?= translateLabel('Thank you for registering for your live course at Shaw Academy',$translations) ?>.</p>
				</section>
			</div>
		</section>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
		<script src="fb/js/bootstrap.min.js"></script>
		<!-- Owl Carousel plugin -->    <script src="fb/js/owl.carousel.js"></script>
		<!-- SlideMenu and Touchwipe -->
		<script src="fb/js/jquery.sidr.min.js"></script>
		<script src="fb/js/touchwipe.min.js"></script>
		<!-- Wow.js -->
		<script src="fb/js/wow.min.js"></script>
		<script src="fb/js/jquery.cookie.js"></script>
		<script src="fb/js/jquery.cookiecuttr.js"></script>
		<script src="fb/js/jquery.easing.min.js"></script>    <!--<script type="text/javascript">
			--><!-- Functions Js -->
		<script src="fb/js/functions.js"></script>
		<script src="fb/js/popin.js"></script>
		<link rel="stylesheet" href="fb/style-loader.css">
		<script src="fb/js/jquery-loader.js"></script>
	</body>
</html>