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
	<script src="fb/intel/intlTelInput.min.js"></script>
	<link rel="stylesheet" href="fb/intel/css/intlTelInput.css">
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
<script type="text/javascript">mixpanel.track("Viral Page View")</script>

	</head>
<body>
	<div class="container-fluid lrg-bg">
	<div class="row">
		<div id="top-logo" class="col-md-12">
		<img src="fb/ShawAcademy-Logo.png" alt="Shaw Academy Logo" class="logo" />
		<img id="cap" src="fb/Short_logo.png" alt="Start Learning" class="" />
		</div>
	</div>
		<div class="container">
			<div id="big-box" class="col-lg-8 col-lg-offset-2 col-sm-12">
				<div class="row top-row">
					<div class="col-sm-12 top-text">

						<h1>Congratulations !</h1>
						<h3>You have just taken your first step on your life-changing educational journey.</h3>
					</div>
				</div>
				<div class="row low-row">
					<div class="col-sm-6 text-center log">
						<p class="top-thing">Please enter your details below:</p>
						<form id="log" action="/" method="POST">
					<!--	<label>User Name / Email ID</label> -->

						<input class="form-control-rk <?php if (isset($errors['firstName'])){ echo "error";} ?>" type="text" name="firstName" placeholder="First Name" value="<?php if (isset($_POST['firstName'])){ echo $_POST['firstName'];} ?>" >
						<input class="form-control-rk <?php if (isset($errors['lastName'])){ echo "error";} ?>" type="text" name="lastName" placeholder="Last Name" value="<?php if (isset($_POST['lastName'])){ echo $_POST['lastName'];} ?>">
						<input class="form-control-rk <?php if (isset($errors['email'])){ echo "error";} ?>" type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])){ echo $_POST['email'];} ?>">
						<input class="form-control-rk" id="phone" type="tel" name="phone" placeholder="Phone" value="<?php if (isset($_POST['phone'])){ echo $_POST['phone'];} ?>">
<input  type="hidden" name="product" value="<?php  echo $_GET['product']; ?>" >
						<div class="errors-here">
						<?php if (isset($errors['firstName'])): ?>
							<span><?php echo $errors['firstName'] ?></span><br />
						<?php endif; ?>
						<?php if (isset($errors['lastName'])): ?>
							<span ><?php echo $errors['lastName'] ?></span><br />
						<?php endif; ?>
						<?php if (isset($errors['email'])): ?>
							<span ><?php echo $errors['email'] ?></span><br />
						<?php endif; ?>

						<span id="valid-msg" class="hide">✓ Valid</span>
						<span id="error-msg" class="hide">Invalid number</span>
						</div>
						<div class="btns" style="margin: 0px -50px">
							<a href="#" id="loger" class="btn" onclick="formSubmit()"> Submit <img src="fb/nav-orange.svg" title="Submit" /></a>
							</div>
						</form>
					</div>
					<div class="col-sm-6 text-center reg">
					<!--	<p class="top-thing">New Student?</p> -->

						<div class="row steps">
							<div class="col-xs-4">
								<img src="fb/step1.svg" alt="Select Your Course" />
								<p>1-Select Course</p>
							</div>
							<div class="col-xs-4">
								<img src="fb/step2.svg" alt="Start Learning" />
								<p>2-Start Learning</p>
							</div>
							<div class="col-xs-4">
								<img src="fb/step3.svg" alt="Succeed" />
								<p>3-Succeed</p>
							</div>
						</div>
						<div class="row join">
						<h3>Join over 500,000 graduates</h3>
						<h5></br> and get access to the best</br> live education on the planet</h5>
						</div>
						<div class="row image">

						<img class="img-responsive pull-right" style="max-width: 200px" src="fb/happy-crowd.jpg" alt="" />
						</div>

					<!--	<div class="row">
							<div class="btns">
								<p>Not registered yet? Click here</p>
								<a href="http://www.shawacademy.com/learning/?product=sa-social&lang=en" class="btn">Enroll Now <img src="fb/nav-white.svg" title="Enroll Now" /></a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	var reset = function() {
	  $("#phone").removeClass("error");
	  $("#error-msg").addClass("hide");
	  $("#valid-msg").addClass("hide");
	};


	$("#phone").intlTelInput({
		autoFormat: true,
		nationalMode:false,
	  preferredCountries:['eg','sa'],
		/*
	  geoIpLookup: function(callback) {
			$.get('https:learn.shawacademy.com/freegeoip/json', function() {}, "jsonp").always(function(resp) {
				debugger;
	      var countryCode = (resp && resp.country) ? resp.country : "";
	      callback(countryCode);
	    });
	  }*/
	});
	/*
	$("#phone").blur(function() {
	  reset();
	  if ($.trim($("#phone").val())) {
	    if ($("#phone").intlTelInput("isValidNumber")) {
	      $("#valid-msg").removeClass("hide");
	    } else {
	      $("#phone").addClass("error");
	      $("#error-msg").removeClass("hide");
	    }
	  }
	});*/
	formSubmit = function() {
		if($('#phone').val() == ""){
			$("#phone").addClass("error");
			$("#error-msg").removeClass("hide");
			return false;
		} else {
			$("#valid-msg").removeClass("hide");
			$("#error-msg").addClass("hide");
			$("form").submit();
		}

	}
	</script>

</body>
</html>
