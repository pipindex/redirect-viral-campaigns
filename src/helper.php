<?php

global $errors;

$lang = $_GET['lang'];
$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . '/translation_files/en/registration.php';
$translationsPath = $_SERVER['DOCUMENT_ROOT'] . '/translation_files/' . $lang . '/registration.php';

if (!file_exists($translationsPath)) {
  include $defaultTranslationsPath;
} else {
  include $translationsPath;
}

function convertDate($dateString, $locale=null){
  if($locale){
    $time = strtotime($dateString);
    $oldLocale = setlocale(LC_TIME, $locale);
    setlocale(LC_TIME, $locale);
    return utf8_encode(strftime("%A %b %d, %Y %I:%M%p", $time));
  }
  else{
    $time = strtotime($dateString);
    $oldLocale = setlocale(LC_TIME, $locale);
    return strftime("%A %b %d, %Y", $time); 
  }
}
function getDates($course,$lang){
  switch($lang){
    
  case 'de': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 18:00:00', 'de_DE'), convertDate('2016-07-25 18:00:00', 'de_DE'));
          break;
        case 'nutrition':
          $dates = array(convertDate('2016-06-27 18:00:00', 'de_DE'),convertDate('2016-07-25 18:00:00', 'de_DE'));
          break;
        case 'sports-nutrition':
          $dates = array(convertDate('2016-06-27 18:00:00', 'de_DE'),convertDate('2016-07-25 18:00:00','de_DE'));
          break;
        case 'health':
          $dates = array();
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 18:00:00','de_DE'),convertDate('2016-07-25 18:00:00','de_DE'));
          break;
        case 'social-media':
          $dates = array(convertDate('2016-06-27 18:00:00','de_DE'),convertDate('2016-07-25 18:00:00','de_DE'));
          break;
      }
  break;
  case 'fr': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 18:00:00','fr_FR'), convertDate('2016-07-25 18:00:00','fr_FR'));
          break;
        case 'nutrition':
          $dates = array(convertDate('2016-06-27 18:00:00','fr_FR'), convertDate('2016-07-25 18:00:00','fr_FR'));
          break;
        case 'sports-nutrition':
          $dates = array(convertDate('2016-06-27 18:00:00','fr_FR'), convertDate('2016-07-25 18:00:00','fr_FR'));
          break;
        case 'health':
          $dates = array(convertDate('2016-06-27 18:00:00','fr_FR'), convertDate('2016-07-25 18:00:00','fr_FR'));
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 18:00:00','fr_FR'), convertDate('2016-07-25 18:00:00','fr_FR'));
          break;
          
      }
  break;
  case 'es': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 18:00:00','es_ES'), convertDate('2016-07-25 18:00:00','es_ES'));
          break;
        case 'nutrition':
          $dates = array(convertDate('2016-06-27 18:00:00','es_ES'), convertDate('2016-07-25 18:00:00','es_ES'));
          break;
      }
  break;
  case 'it': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 18:00:00', 'it_IT'), convertDate('2016-07-25 18:00:00', 'it_IT'));
          break;
        case 'nutrition':
          $dates = $dates = array(convertDate('2016-06-27 18:00:00', 'it_IT'), convertDate('2016-07-25 18:00:00', 'it_IT'));;
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 18:00:00', 'it_IT'), convertDate('2016-07-25 18:00:00', 'it_IT'));
          break;
        case 'graphic-design':
          $dates = array(convertDate('2016-06-27 18:00:00', 'it_IT'), convertDate('2016-07-25 18:00:00', 'it_IT'));
          break;
        }  
      break;
  
  case 'pt': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 22:00:00', 'pt_PT'), convertDate('2016-07-25 22:00:00', 'pt_PT'));
          break;
        case 'lightroom':
          $dates = array();
          break;
        case 'photoshop-bonus':
          $dates = array();
          break;
        case 'photoshop':
          $dates = array(convertDate('2016-06-27 19:00:00', 'pt_PT'),convertDate('2016-07-25 22:00:00','pt_PT'));
          break;
        case 'nutrition':
          $dates = array(convertDate('2016-06-27 19:00:00', 'pt_PT'),convertDate('2016-07-25 22:00:00', 'pt_PT'));
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 19:00:00', 'pt_PT'),convertDate('2016-07-25 22:00:00', 'pt_PT'));
          break;
        case 'graphic-design':
          $dates = array(convertDate('2016-06-27 19:00:00', 'pt_PT'),convertDate('2016-07-25 22:00:00', 'pt_PT'));
          break;
        case 'business-english':
          $dates = array(convertDate('2016-06-27 19:00:00', 'pt_PT'),convertDate('2016-07-25 22:00:00', 'pt_PT'));
          break;          
      }
  break;
  case 'jp': 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 11:30:00', 'jp_JP'), convertDate('2016-07-25 11:30:00', 'jp_JP'));
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 11:00:00', 'jp_JP'),convertDate('2016-06-27 11:00:00', 'jp_JP'));
          break;
      }
  break;
  default: 
      switch($course){
        case 'photography':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'lightroom':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'photoshop':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'wedding-photo':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'investment':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'nutrition':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'sports-nutrition':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'marketing':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'social-media':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'blogging':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'web-development':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'web-design':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'graphic-design':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
          case 'mobile-app':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
          case 'kids-coding':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
          case 'kids-coding-2':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
          case 'kids-python':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'excel':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'careers':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'music':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'guitar':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'cookery':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'business-english':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'Entrepreneurial':
          $dates = array(convertDate('2015-06-29 19:00:00'),convertDate('2015-08-03 19:00:00'));
          break;
        case 'budgeting':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
        case 'sales':
          $dates = array(convertDate('2016-06-27 19:00:00'),convertDate('2016-07-25 19:00:00'));
          break;
          
      }
      break;
    }
    return $dates;
}
