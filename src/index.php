<?php
  $db = new mysqli('shawacademy.crhfpw0gywtf.ap-southeast-1.rds.amazonaws.com', 'social_db', 'w3l1k3pu66y', 'social_channel_leads');
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
  }

  mysqli_set_charset($db, "utf8");
  $errors = array();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid = checkData();
    if(!$valid){
      include_once "social-channel-congratulations.php";
    } else {
      saveData();
      include_once "social-channel-thank-you.php";

    }
  } else {
    $lang = $_GET['lang'];
    showForm();
    
    
  }
  function checkData(){
      global $errors;
      $valid = true;
      if(!$_POST['firstName'] || empty($_POST['firstName'])){
          $errors['firstName'] = "First name is mandatory";
          $valid = false;
      }
      if(!$_POST['lastName'] || empty($_POST['lastName'])){
          $errors['lastName'] = "Last name is mandatory";
          $valid = false;
      }
      if(!$_POST['email'] || empty($_POST['email'])){
          $errors['email'] = "Email is mandatory";
          $valid = false;
      } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errors['email'] = "Incorrect Email Format";
          $valid = false;
      }
      if(!$_POST['password'] || empty($_POST['password'])){
          $errors['password'] = "password is mandatory";
          $valid = false;
      }
      if(!$_POST['confirm_password'] || empty($_POST['comfirm_password'])){
          $errors['comfirm_password'] = "confirm password is mandatory";
          $valid = false;
      }
      if($_POST['confirm_password'] != ($_POST['password'])){
          $errors['comfirm_password'] = "password and confirm password do not match";
          $valid = false;
      }if(!$_POST['course'] || empty($_POST['couser'])){
          $errors['course'] = "Please select a course";
          $valid = false;
      }if(!$_POST['date'] || empty($_POST['date'])){
          $errors['date'] = "Please select a Date";
          $valid = false;
      }
      /*
      if(!$_POST['phone'] || empty($_POST['phone'])){
          $errors['phone'] = "Phone is mandatory";
          $valid = false;
      }*/
      return $valid;
  }

  function translateLabel($string, $translations) {
  if (isset($translations['labels'][$string])) {
    return $translations['labels'][$string];
  }
  return $string;
}

  function saveData(){
    global $db;
    $phone = "";
    
    if(isset($_POST['product'])) {
       $product = $_POST['product'];
    }
    else {
       $product = "";
     }
    
    if(isset($_POST['phone'])){
        $phone = mysqli_real_escape_string($db,$_POST['phone']);
    }
    $firstName = mysqli_real_escape_string($db,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($db,$_POST['lastName']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $sql = "SELECT COUNT(*) as inthere FROM Leads WHERE Email = '$email' ";
    $res = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($res);
    $ip = $_SERVER['REMOTE_ADDR'];
    if($row['inthere'] == 0){
      $sql = "INSERT INTO Leads(FirstName,LastName,Email,Phone,IPAddress,Product,Course,StartDate,Paaword) VALUES('$firstName','$lastName','$email','$phone','$ip','$product','$Course','$StartDate','$password') ";

      mysqli_query($db,$sql);
    }

  }

  showForm($lang){

    $courses = array(
  'photography' => translateLabel("Diploma in Photography", $translations),
  'lightroom' => translateLabel("Mastering adobe lightroom", $translations),
  'photoshop' => translateLabel("Diploma in Photoshop", $translations),
    'photoshop-bonus'=>translateLabel("Diploma in Photoshop - On Demand (German only)", $translations),
  'wedding-photo' => translateLabel("The Art of Wedding Photography", $translations),
    'wedding-bonus' => translateLabel("The Art of Wedding Photography - On Demand (German Only)", $translations),
    'foundation' => translateLabel("Diploma in Online Trading", $translations),
    'investment' => translateLabel("Fundamentals of Investment Programme", $translations),
  'nutrition' => translateLabel("Diploma in Nutrition", $translations),
  'sports-nutrition' => translateLabel("Diploma in Sports Nutrition", $translations),
  'diet-weight' => translateLabel("Diploma in Weight Loss", $translations),
  'diet-weight-bonus'=>translateLabel("Diploma in Weight Loss - On Demand (German only)", $translations),
  'child-nutrition' => translateLabel("Certificate in Child Nutrition", $translations),
  'health' => translateLabel("Online Health and Fitness Programme", $translations),
  //'health-live' => translateLabel("Online Health and Fitness Programme - Live (French only)", $translations),
  'marketing' => translateLabel("Diploma in Online Marketing", $translations),
  'social-media' => translateLabel("Diploma In Social Media", $translations),
  'blogging' => translateLabel("Foundation in Blogging & Content Marketing", $translations),
    'web-development' => translateLabel("Introduction to Web Development", $translations),
    'web-design' => translateLabel("Introduction to Web Design", $translations),
    'graphic-design' => translateLabel("Introduction to Graphic Design", $translations),
    'mobile-app' => translateLabel("Mobile Application", $translations),
  'kids-coding' => translateLabel("Coding for Kids Programme", $translations),
    'kids-coding-2' => translateLabel("Scratch Games for Kids", $translations),
  'kids-python' => translateLabel("Python for Kids Programme", $translations),
  'excel' => translateLabel("Diploma in Excel", $translations),
    'careers' => translateLabel("Career Advancement Programme", $translations),
    'music'=>translateLabel("Introduction to Music Theory And Practice", $translations),
    'guitar'=>translateLabel("Introduction to Guitar", $translations),
    'beauty'=>translateLabel("Diploma in Personal Beauty", $translations),
    'cookery'=>translateLabel("Introduction to Cookery", $translations),
    'business-english'=>translateLabel("English for Business", $translations),
  'entrepreneurial' => translateLabel("Diploma in Entrepreneurial Studies", $translations),
  'budgeting' => translateLabel("Personal and Household Budgeting", $translations),
  'sales' => translateLabel("Diploma IN Psychology Of Sales", $translations),
  //'metals-trading' => translateLabel("Introductory Metals Trading", $translations),
);
  if ($lang === 'pt'){
    unset($courses['photoshop-bonus']);
  } 

    include_once "social-channel-congratulations.php";
  }

  getDates($course,$lang){
    switch($lang){
      case 'en': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'de': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'fr': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'es': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'it': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'pt': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
    case 'jp': 
        switch($course){
          case 'photography':
            $dates = array();
            break;
          case 'lightroom':
            $dates = array();
            break;
          case 'photoshop-bonus':
            $dates = array();
            break;
          case 'photoshop':
            $dates = array();
            break;
          case 'wedding-photo':
            $dates = array();
            break;
          case 'wedding-bonus':
            $dates = array();
            break;
          case 'foundation':
            $dates = array();
            break;
          case 'investment':
            $dates = array();
            break;
          case 'nutrition':
            $dates = array();
            break;
          case 'sports-nutrition':
            $dates = array();
            break;
          case 'health':
            $dates = array();
            break;
          case 'marketing':
            $dates = array();
            break;
          case 'social-media':
            $dates = array();
            break;
          case 'blogging':
            $dates = array();
            break;
          case 'web-development':
            $dates = array();
            break;
            case 'web-design':
            $dates = array();
            break;
            case 'graphic-design':
            $dates = array();
            break;
            case 'mobile-app':
            $dates = array();
            break;
            case 'kids-coding':
            $dates = array();
            break;
            case 'kids-coding-2':
            $dates = array();
            break;
            case 'kids-python':
            $dates = array();
            break;
          case 'excel':
            $dates = array();
            break;
          case 'careers':
            $dates = array();
            break;
          case 'music':
            $dates = array();
            break;
          case 'guitar':
            $dates = array();
            break;
          case 'cookery':
            $dates = array();
            break;
          case 'business-english':
            $dates = array();
            break;
          case 'entrepreneurial':
            $dates = array();
            break;
          case 'budgeting':
            $dates = array();
            break;
          case 'sales':
            $dates = array();
            break;
            
        }
    }
  }
?>
