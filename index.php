<?php

/*
  This file is a rooter, it redirects the user to the asked view using the controller
*/

require('controller/controller.php');

try{
  if(isset($_GET['action'])) {
    echo 'isset($_GET["action"])';
  }else{
    homePageView();
  }
}catch(Exception $e) {
  echo "An error has occured.";
  echo "</br>Developer mode : " . $e->getMessage();
}
