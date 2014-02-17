<?php

require 'vendor/autoload.php';
require 'includes.php';

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
for($i= 0;$i < sizeof($scriptName);$i++) {
  if ($requestURI[$i] == $scriptName[$i]) {
    unset($requestURI[$i]);
  } 
}

$command = array_values($requestURI);

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  switch($command[0]) {
    case 'new':
    //we have 2 things we could create a 'new' of
      switch($command[1]) {
        case 'borrower':
          echo $engine->render('newBorrower', array());
          break;
        case 'item':
          echo $engine->render('newItem', array());
          break;
        default:
          header('Location: /');
      }
      break;
    default: 
      echo $engine->render('inventory', array('item' => [1,2,3,4,5])); 
      break;
  }
} elseif($_SERVER['REQUEST_METHOD'] === 'POST') {

}

?>
