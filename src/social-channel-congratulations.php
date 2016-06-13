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
    <title>Shaw Academy</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="fb/fb-stuff.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="fb/fb-style-con.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<script src="fb/intel/intlTelInput.min.js"></script>
	<link rel="stylesheet" href="fb/intel/css/intlTelInput.css">

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
		mixpanel.init("20597dcff540172cf5563b343f55a3ab");</script><!-- end Mixpanel -->
	<script type="text/javascript">mixpanel.track("Viral Page View")</script>
</head>

<body>
	<h1><img src="fb/img/logo.png" alt="Shaw Academy" title="Shaw Academy"></h1>
	<article class="container">
		<section id="banner">
			<section>
				<h2><?= translateLabel('Congratulations!',$translations) ?></h2>
				<p><?= translateLabel('You have just taken your first step to your life changing educational journey.',$translations) ?></p>
			</section>
		</section>
		<section id="icons">
			<ul>
				<li><?= translateLabel('1. Select Course',$translations) ?></li>
				<li><?= translateLabel('2. Start Learning',$translations) ?></li>
				<li><?= translateLabel('3. Succeed',$translations) ?></li>
			</ul>
		</section>
		<section id="form">
			<form id="log" action="/" method="POST">
				<section>
					<div>
						<h4><?= translateLabel('First Name',$translations) ?></h4>
						<input class="form-control-rk <?php if (isset($errors['firstName'])){ echo "error";} ?>" type="text" name="firstName" placeholder="<?= translateLabel('First Name',$translations) ?>" value="<?php if (isset($_POST['firstName'])){ echo $_POST['firstName'];} ?>">
					</div>
					<div>
						<h4><?= translateLabel('Last Name',$translations) ?></h4>
						<input class="form-control-rk <?php if (isset($errors['lastName'])){ echo "error";} ?>" type="text" name="lastName" placeholder="<?= translateLabel('Last Name',$translations) ?>" value="<?php if (isset($_POST['lastName'])){ echo $_POST['lastName'];} ?>">
					</div>
					<div>
						<h4><?= translateLabel('Email',$translations) ?></h4>
						<input class="form-control-rk <?php if (isset($errors['email'])){ echo "error";} ?>" type="email" name="email" placeholder="<?= translateLabel('Email',$translations) ?>" value="<?php if (isset($_POST['email'])){ echo $_POST['email'];} ?>">
					</div>
					<div>
						<h4><?= translateLabel('Phone Number',$translations) ?></h4>
						<input class="form-control-rk" id="phone" type="tel" name="phone" placeholder="<?= translateLabel('Phone Number',$translations) ?>" value="<?php if (isset($_POST['phone'])){ echo $_POST['phone'];} ?>">
					</div>
				</section>
				<section>
					<div>
						<h4><?= translateLabel('Select Course',$translations) ?></h4>
						<div class="selectStyle" id="course">
							<div>
								<select class="form-control-rk" id="selectbox">
									<option class="desel" value="" disabled selected>Select Course</option>
									<option value="alpha">alpha</option>
									<option value="beta">beta</option>
									<option value="gamma">gamma</option>
								</select>
							</div>
						</div>
					</div>
					<div>
						<h4><?= translateLabel('Select Dates',$translations) ?></h4>
						<div class="selectStyle" id="dates">
							<div>
								<select class="form-control-rk">
									<option class="desel" value="" disabled selected>Select Dates</option>
									<option value="alpha">alpha</option>
									<option value="beta">beta</option>
									<option value="gamma">gamma</option>
								</select>
							</div>
						</div>
					</div>
					<div>
						<h4><?= translateLabel('Enter Password',$translations) ?></h4>
						<input class="form-control-rk" type="password" placeholder="<?= translateLabel('Enter Password',$translations) ?>">
					</div>
					<div>
						<h4><?= translateLabel('Re-enter Password',$translations) ?></h4>
						<input class="form-control-rk" type="password" placeholder="<?= translateLabel('Re-enter Password',$translations) ?>">
					</div>
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
						<span id="error-msg" class="hide"><?= translateLabel('Invalid number',$translations) ?></span>
					</div>
				</section>
				<br>
				<a href="#" id="loger" class="btn" onclick="formSubmit()"><?= translateLabel('Submit',$translations) ?></a>
			</form>
		</section>
	</article>

	<script>

		

			$("#course").on('change', function() {
  				console.log('this started working');
  				$("#dates").css('display','block');
  				$(".selectStyle").css('margin-bottom','32px')
			});
		

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