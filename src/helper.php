<?php

$lang = $_GET['lang'];
$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . '/translation_files/en/registration.php';
$translationsPath = $_SERVER['DOCUMENT_ROOT'] . '/translation_files/' . $lang . '/registration.php';

if (!file_exists($translationsPath)) {
  include $defaultTranslationsPath;
} else {
  include $translationsPath;
}

function getDates($course,$lang){
  switch($lang){
    
  case 'de': 
      switch($course){
        case 'photography':
          $dates = array('2016-06-27 18:00:00 Europe/Berlin', '2016-07-25 18:00:00 Europe/Berlin');
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
          $dates = array('2016-06-25 18:00:00 Europe/Berlin','2016-07-25 18:00:00 Europe/Berlin');
          break;
        case 'sports-nutrition':
          $dates = array('2016-06-25 18:00:00 Europe/Berlin','2016-07-25 18:00:00 Europe/Berlin');
          break;
        case 'health':
          $dates = array();
          break;
        case 'marketing':
          $dates = array('2016-06-25 18:00:00 Europe/Berlin','2016-07-25 18:00:00 Europe/Berlin');
          break;
        case 'social-media':
          $dates = array('2016-06-25 18:00:00 Europe/Berlin','2016-07-25 18:00:00 Europe/Berlin');
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
  break;
  case 'fr': 
      switch($course){
        case 'photography':
          $dates = array('2016-06-27 18:00:00 Europe/Paris', '2016-07-25 18:00:00 Europe/Paris');
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
          $dates = array('2016-06-25 18:00:00 Europe/Paris','2016-07-25 18:00:00 Europe/Paris');
          break;
        case 'sports-nutrition':
          $dates = array('2016-06-25 18:00:00 Europe/Paris','2016-07-25 18:00:00 Europe/Paris');
          break;
        case 'health':
          $dates = array('2016-06-25 18:00:00 Europe/Paris','2016-07-25 18:00:00 Europe/Paris');
          break;
        case 'marketing':
          $dates = array('2016-06-27 18:00:00 Europe/Paris','2016-07-25 18:00:00 Europe/Paris');
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
  break;
  case 'es': 
      switch($course){
        case 'photography':
          $dates = array('2016-07-25 18:00:00 Europe/Madrid', '2016-06-25 18:00:00 Europe/Madrid');
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
          $dates = array('2016-06-25 18:00:00 Europe/Madrid','2016-07-25 18:00:00 Europe/Madrid');
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
  break;
  case 'it': 
      switch($course){
        case 'photography':
          $dates = array('2016-06-27 18:00:00 Europe/Rome', '2016-07-25 18:00:00 Europe/Rome');
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
          $dates = array('2016-06-25 18:00:00 Europe/Rome','2016-07-25 18:00:00 Europe/Rome');
          break;
        case 'sports-nutrition':
          $dates = array();
          break;
        case 'health':
          $dates = array();
          break;
        case 'marketing':
          $dates = array('2016-06-25 18:00:00 Europe/Rome','2016-07-25 18:00:00 Europe/Rome');
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
          $dates = array('2016-06-27 18:00:00 Europe/Rome','2016-07-25 18:00:00 Europe/Rome');
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
      break;
  
  case 'pt': 
      switch($course){
        case 'photography':
          $dates = array('2016-06-27 22:00:00 Europe/Lisbon', '2016-07-25 22:00:00 Europe/Lisbon');
          break;
        case 'lightroom':
          $dates = array();
          break;
        case 'photoshop-bonus':
          $dates = array();
          break;
        case 'photoshop':
          $dates = array('2016-06-25 19:00:00 Europe/Lisbon','2016-07-25 22:00:00 Europe/Lisbon');
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
          $dates = array('2016-06-25 19:00:00 Europe/Lisbon','2016-07-25 22:00:00 Europe/Lisbon');
          break;
        case 'sports-nutrition':
          $dates = array();
          break;
        case 'health':
          $dates = array();
          break;
        case 'marketing':
          $dates = array('2016-06-25 19:00:00 Europe/Lisbon','2016-07-25 22:00:00 Europe/Lisbon');
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
          $dates = array('2016-06-27 19:00:00 Europe/Lisbon','2016-07-25 22:00:00 Europe/Lisbon');
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
          $dates = array('2016-06-27 19:00:00 Europe/Lisbon','2016-07-25 22:00:00 Europe/Lisbon');
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
  break;
  case 'jp': 
      switch($course){
        case 'photography':
          $dates = array('2016-06-27 11:30:00 Asia/Tokyo' ,'2016-07-25 11:30:00 Asia/Tokyo');
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
          $dates = array('2016-06-25 11:00:00 Asia/Tokyo','2016-06-27 11:00:00 Asia/Tokyo');
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
  break;
  default: 
      switch($course){
        case 'photography':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'lightroom':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'photoshop-bonus':
          $dates = array();
          break;
        case 'photoshop':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'wedding-photo':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'wedding-bonus':
          $dates = array();
          break;
        case 'foundation':
          $dates = array();
          break;
        case 'investment':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'nutrition':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'sports-nutrition':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'health':
          $dates = array();
          break;
        case 'marketing':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'social-media':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'blogging':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'web-development':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'web-design':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'graphic-design':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'mobile-app':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'kids-coding':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'kids-coding-2':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          case 'kids-python':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'excel':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'careers':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'music':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'guitar':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'cookery':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'business-english':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'Entrepreneurial':
          $dates = array('2015-06-29 19:00:00 GMT','2015-08-03 19:00:00 GMT');
          break;
        case 'budgeting':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
        case 'sales':
          $dates = array('2016-06-25 19:00:00 GMT','2016-07-25 19:00:00 GMT');
          break;
          
      }
      break;
    }
    return $dates;
}
