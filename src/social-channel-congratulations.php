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
			<div id="right-side">
				<h4 id="register-steps">
					<?= translateLabel("REGISTER",$translations) ?>
				</h4>
				<form id="log" action="/" class="roundtable" method="POST">
					<div id="input-div" class="name-icon">
						<input class="new-input-field <?php if (isset($errors['firstName'])){ echo "error";} ?>" id="full_name" name="firstName" type="text" placeholder="<?= translateLabel('Name',$translations) ?> " value="<?php if (isset($_POST['firstName'])){ echo $_POST['firstName'];} ?>">
					</div>
					<div id="input-div" class="name-icon">
						<input class="new-input-field <?php if (isset($errors['lastName'])){ echo "error";} ?>" id="last_name" name="lastName" type="hidden" placeholder="<?= translateLabel('Last Name',$translations) ?> " value="<?php if (isset($_POST['lastName'])){ echo $_POST['lastName'];} ?>">
					</div>
					<div id="input-div">
						<input class="new-input-field" id="first_name" name="first_name" placeholder="<?= translateLabel('First Name',$translations) ?> " type="hidden" value="<?= $voucherUser->firstName ?>" >
					</div>
					<div id="input-div" class="email-icon">
						<input class="new-input-field <?php if (isset($errors['email'])){ echo "error";} ?>" id="email" name="email" type="email" placeholder="<?= translateLabel('Email',$translations) ?> " value="<?php if (isset($_POST['email'])){ echo $_POST['email'];} ?>">
					</div>
					<div id="input-div">
						<input class="new-input-field" id="phone" name="phone" type="tel" placeholder="<?= translateLabel('Phone Number',$translations) ?> " value="<?php if (isset($_POST['phone'])){ echo $_POST['phone'];} ?>"/>
						<span id="error-msg" class="hide"><?= translateLabel('Invalid number',$translations) ?></span>
					</div>
					<div id="input-div">
						<div class="selectStyle" id="course">
							<div>
								<img src="fb/images/course.svg" width="26.672" height="26.672" class="pageIcon">
								<select class="form-control-rk courseSelect" id="selectbox" name="course">
									<option class="desel" value="" disabled selected><?= translateLabel('Select Course',$translations) ?></option>
									<?php foreach ($courses as $key => $value): ?>
										<option value="<?= $key ?>" <?= $key == $_POST['course'] ? 'selected' : '' ?> ><?= translateLabel($value,$translations) ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>	
					</div>
					<div id="input-div">
						<div class="selectStyle" id="dates">
							<div>
								<img src="fb/images/date.svg" width="26.672" height="26.672" class="pageIcon">
								<select class="form-control-rk courseDates" name='date'>
									<option class="desel" value="" disabled selected><?= translateLabel('Select Date',$translations) ?></option>
									 
								</select>
							</div>
						</div>
					</div>
					<div id="input-div" class="password-icon">
						<img src="fb/images/eye.svg" alt="show password" id="showPassword" width="26.672" height="26.672">
						<input class="new-input-field" name="password" type="password" placeholder="<?= translateLabel('Choose Your Password',$translations) ?>">
					</div>
					<div id="input-div">
						<input class="new-input-field" name="confirm_password" type="hidden" placeholder="<?= translateLabel('Re-enter Password',$translations) ?>">
					</div>
					<div class='errorMsg'><?php if (isset($errors['password'])){ echo translateLabel($errors['password'],$translations);} ?></div>
					<input  type="hidden" name="product" value="<?php  echo $_GET['product']; ?>" >
					<div id="submit-btn"> <input type="submit" class="main-cta" value="<?= translateLabel('Submit',$translations); ?>" id="loger" onclick="formSubmit(); return false;"></div>
				</form>
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
		<script>
			$("#course").on('change', function() { 
  				$("#dates").css('opacity','1').css('pointer-events', 'auto');

  				if(courseDates[$(".courseSelect").val()].length <= 0){
  					$("#dates").css('display','.5').css('pointer-events', 'auto');
  					return;
  				}

  				$(".courseDates").empty();

  				courseDates[$(".courseSelect").val()].forEach(function(currentValue,index){
  					$(".courseDates").append('<option value = "'+currentValue+'"">'+currentValue+'</option>');
  				});
			});	

			var reset = function() {
	  		$("#phone").removeClass("error");
	  		$("#error-msg").addClass("hide");
	  		$("#valid-msg").addClass("hide");
		};

		function togglePasswordVisibility() {
			console.log($("input[name='password']").attr('type'));
			if($("input[name='password']").attr('type') == 'password') {
				$("input[name='password']").attr('type', 'text');
				$("#showPassword").css('opacity', '.4');
			} else if($("input[name='password']").attr('type') == 'text') {
				$("input[name='password']").attr('type', 'password');
				$("#showPassword").css('opacity', '1');
			}
		}

		$("#showPassword").click(function() {
			togglePasswordVisibility();
		});

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
			$("input[name='password']").attr('type', 'password');
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