<?php
$db = new mysqli('shawacademy.crhfpw0gywtf.ap-southeast-1.rds.amazonaws.com', 'social_db', 'w3l1k3pu66y', 'social_channel_leads');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

mysqli_set_charset($db, "utf8");



$lang="en";
if(isset($_GET['lang'])) {
    $lang=$_GET['lang'];
}

$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid = checkData();
    if (!$valid) {
        showForm($lang,$translations);
    } else {
        saveData($lang);
        include_once "social-channel-thank-you.php";
    }
} else {
    showForm($lang,$translations);
}


  function checkData(){
      global $errors;
      $valid = true;
      //  if(!$_POST['firstName'] || empty($_POST['firstName'])){
      //     $errors['firstName'] = translateLabel("EMPTY FIRSTNAME", $translations);
      //     $valid = false;
      // }
      // if(!$_POST['lastName'] || empty($_POST['lastName'])){
      //     $errors['lastName'] = translateLabel("EMPTY LASTNAME", $translations);
      //     $valid = false;
      // }
      // if(!$_POST['email'] || empty($_POST['email'])){
      //     $errors['email'] = translateLabel("EMPTY EMAIL", $translations);
      //     $valid = false;
      // } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
      //   $errors['email'] = translateLabel("INVALID EMAIL", $translations);
      //     $valid = false;
      // }
      // if(!$_POST['password'] || empty($_POST['password'])){
      //     $errors['password'] = translateLabel("EMPTY PASSWORD", $translations);
      //     $valid = false;
      // }
      // if(!$_POST['confirm_password'] || empty($_POST['confirm_password'])){
      //     $errors['confirm_password'] = translateLabel("EMPTY PASSWORD CONFIRM", $translations);
      // }
      // if($_POST['confirm_password'] != ($_POST['password'])){
      //     $errors['password'] ="NOMATCH PASSWORD";
      //     $valid = false;
      //  }   
      // if(!$_POST['course'] || empty($_POST['course'])){
      //     $errors['course'] = translateLabel("Empty COURSE", $translations);
      //     $valid = false;
      // }if(!$_POST['date'] || empty($_POST['date'])){
      //     $errors['date'] = translateLabel("Empty DATE", $translations);
      //     $valid = false;
      // }
      /*
      if(!$_POST['phone'] || empty($_POST['phone'])){
          $errors['phone'] = "Phone is mandatory";
          $valid = false;
      }*/


      return $valid;
  }

  

function translateLabel($string, $translations)
{
    if (isset($translations['labels'][$string])) {
        return $translations['labels'][$string];
    }
    return $string;
}

function saveData($lang)
{
    global $db;
    $phone = "";

    if (isset($_POST['product'])) {
        $product = $_POST['product'];
    } else {
        $product = "";
    }

    if (isset($_POST['phone'])) {
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
    }

      $fullName = explode(" ", $_POST['firstName']);
    $firstName = mysqli_real_escape_string($db, $fullName[0]);
    $lastName = mysqli_real_escape_string($db, $fullName[1]);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $startDate = mysqli_real_escape_string($db, $_POST['date']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT COUNT(*) as inthere FROM Leads WHERE Email = '$email' ";
    $res = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($res);
    $ip = $_SERVER['REMOTE_ADDR'];
    if ($row['inthere'] == 0) {
        $sql = "INSERT INTO Leads(FirstName,LastName,Email,Phone,IPAddress,Product,Course,StartDate,Password,lang) VALUES('$firstName','$lastName','$email','$phone','$ip','$product','$course','$startDate','$password','$lang') ";

        mysqli_query($db, $sql);
    }

}

function showForm($lang,$translations)
{
    $courses = array(
        'photography' => translateLabel("Diploma in Photography", $translations),
        'lightroom' => translateLabel("Mastering Adobe Lightroom", $translations),
        'photoshop' => translateLabel("Diploma in Photoshop", $translations),
        'wedding-photo' => translateLabel("The Art of Wedding Photography", $translations),
        'foundation' => translateLabel("Diploma in Online Trading", $translations),
        'investment' => translateLabel("Fundamentals of Investment Programme", $translations),
        'nutrition' => translateLabel("Diploma in Nutrition", $translations),
        'sports-nutrition' => translateLabel("Diploma in Sports Nutrition", $translations),
        'diet-weight' => translateLabel("Diploma in Weight Loss", $translations),
        'child-nutrition' => translateLabel("Certificate in Child Nutrition", $translations),
        'health' => translateLabel("Online Health and Fitness Programme", $translations),
        //'health-live' => translateLabel("Online Health and Fitness Programme - Live (French only)", $translations),
        'marketing' => translateLabel("Diploma in Online Marketing", $translations),
        'social-media' => translateLabel("Diploma In Social Media", $translations),
        'blogging' => translateLabel("Diploma in Blogging & Content Marketing", $translations),
        'web-development' => translateLabel("Introduction to Web Development", $translations),
        'web-design' => translateLabel("Introduction to Web Design", $translations),
        'graphic-design' => translateLabel("Introduction to Graphic Design", $translations),
        'mobile-app' => translateLabel("Mobile Application", $translations),
        'kids-coding' => translateLabel("Coding for Kids", $translations),
        'excel' => translateLabel("Diploma in Excel", $translations),
        'careers' => translateLabel("Career Advancement Programme", $translations),
        'music' => translateLabel("Introduction to Music Theory And Practice", $translations),
        'guitar' => translateLabel("Introduction to Guitar", $translations),
        'beauty' => translateLabel("Diploma in Personal Beauty", $translations),
        'cookery' => translateLabel("Introduction to Cookery", $translations),
        'business-english' => translateLabel("English for Business", $translations),
        'entrepreneurial' => translateLabel("Diploma in Entrepreneurial Studies", $translations),
        'budgeting' => translateLabel("Personal and Household Budgeting", $translations),
        'sales' => translateLabel("Diploma IN Psychology Of Sales", $translations),
        //'metals-trading' => translateLabel("Introductory Metals Trading", $translations),
    );

    if ($lang === 'de') {
        unset($courses['lightroom']);
        unset($courses['photoshop']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['health']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['graphic-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['business-english']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);
    }

    if ($lang === 'pt') {
        unset($courses['lightroom']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['sports-nutrition']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['health']);
        unset($courses['social-media']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);
    }

    if ($lang === 'it') {
        unset($courses['lightroom']);
        unset($courses['photoshop']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['sports-nutrition']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['health']);
        unset($courses['social-media']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['business-english']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);

    }
    if ($lang === "fr") {
        unset($courses['lightroom']);
        unset($courses['photoshop']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['social-media']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['graphic-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['business-english']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);
    }

    if ($lang === "es") {
        unset($courses['lightroom']);
        unset($courses['photoshop']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['sports-nutrition']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['health']);
        unset($courses['marketing']);
        unset($courses['social-media']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['graphic-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['business-english']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);

    }

    if ($lang === "jp") {
        unset($courses['lightroom']);
        unset($courses['photoshop']);
        unset($courses['wedding-photo']);
        unset($courses['investment']);
        unset($courses['nutrition']);
        unset($courses['sports-nutrition']);
        unset($courses['diet-weight']);
        unset($courses['child-nutrition']);
        unset($courses['health']);
        unset($courses['social-media']);
        unset($courses['blogging']);
        unset($courses['web-development']);
        unset($courses['web-design']);
        unset($courses['graphic-design']);
        unset($courses['mobile-app']);
        unset($courses['kids-coding']);
        unset($courses['excel']);
        unset($courses['careers']);
        unset($courses['music']);
        unset($courses['guitar']);
        unset($courses['beauty']);
        unset($courses['cookery']);
        unset($courses['business-english']);
        unset($courses['entrepreneurial']);
        unset($courses['budgeting']);
        unset($courses['sales']);
    }



    include_once "social-channel-congratulations.php";
}


?>
