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
    include_once "social-channel-congratulations.php";
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
      /*
      if(!$_POST['phone'] || empty($_POST['phone'])){
          $errors['phone'] = "Phone is mandatory";
          $valid = false;
      }*/
      return $valid;
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
      $sql = "INSERT INTO Leads(FirstName,LastName,Email,Phone,IPAddress,Product) VALUES('$firstName','$lastName','$email','$phone','$ip','$product') ";

      mysqli_query($db,$sql);
    }

  }
?>
