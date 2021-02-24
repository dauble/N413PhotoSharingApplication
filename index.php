<?php
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: index.php
 * Description: The homepage and the bootstrap file.
*/


// require_once("classes/class.database.php");
// require_once("templates/head.php");
//$database = new Database();
//$select_login = "SELECT * FROM final_users WHERE pk_user_id = 1";
//$users = $database->getSQL($select_login);
//print_r($users);
//echo "my name is $first_name";
//echo "Welcome " . $users[0]['first_name'];

//require_once('controllers/user_controller.class.php');
require_once("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//retrieve the action from a querystring variable named "action"
if (!($action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING))) {
  $action = "index";  //default action
}

//take different action depending on the action value
switch ($action) {
  case "index":
    $user_controller->index();
    break;
  case "register":
    $user_controller->register();
    break;
  case "register_confirm":
    $user_controller->register_confirm();
    break;
  case "login":
    $user_controller->login();
    break;
  case "login_confirm":
    $user_controller->login_confirm();
    break;
  case "logout_confirm":
    $user_controller->logout_confirm();
    break;
  case "profile":
    $user_controller->profile();
    break;
  case "add_gallery":
    $user_controller->add_gallery();
    break;
  case "single_gallery_view":
    $user_controller->single_gallery_view();
    break;
  case "add_image":
    $user_controller->add_image();
    break;
  case "reset":
    $user_controller->reset();
    break;
  case "do_reset":
    $user_controller->reset();
    break;
  default:
    $user_controller->error("Invalid action was requested.");
}
