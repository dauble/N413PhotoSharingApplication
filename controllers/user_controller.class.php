<?php
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: user_controller.class.php
 * Description: Controls each 'view'
*/
// require_once('models/user_model.class.php');
// //Views
// require_once('views/index/index.class.php');
// require_once('views/register/register.class.php');
// require_once('views/login/login.class.php');

// comment out for your machine
require_once('views/login_confirm/login_confirm.class.php');
require_once('views/register_confirm/register_confirm.class.php');
require_once('views/logout_confirm/logout_confirm.class.php');
require_once('views/add_image/add_image.class.php');
require_once('views/add_gallery/add_gallery.class.php');
require_once('views/profile/profile.class.php');
require_once('views/single_gallery_view/single_gallery_view.class.php');

class UserController
{

  //Variables
  private $user_model;

  //construct
  function __construct()
  {
    $this->user_model = new UserModel;
  }

  //Shows home page
  function index()
  {
    $main_view = new Index();
    $main_view->show();
  }

  //Calls register method from user model & shows Registration form
  function register()
  {
    $result = $this->user_model->register();

    $main_view = new Register();
    $main_view->show($result);
  }

  function register_confirm()
  {
    // $result = $this->user_model->register_confirm();
    $username = $this->user_model->get_last_username();

    $main_view = new RegisterConfirm();
    $main_view->show($username);
  }

  //Calls login method from user model & shows login form 
  function login()
  {
    $main_view = new Login();
    $main_view->show();
  }

  //Authenticates user on login
  function login_confirm()
  {
    $result = $this->user_model->login();
    $main_view = new LoginConfirm();
    $main_view->show($result);
  }

  //Allows user to logout
  function logout_confirm()
  {
    $this->user_model->logout_confirm();
    $main_view = new LogoutConfirm;
    $main_view->show();
  }

   //Add gallery 
   function add_gallery() {
    $this->user_model->add_gallery();
    $main_view = new AddGallery;
    $main_view->show();
  }
  //Add gallery 
  function single_gallery_view() {
    $this->user_model->single_gallery_view();
    $main_view = new SingleGallery;
    $main_view->show();
  }

  //Add image to a gallery 
  function add_image() {
    $this->user_model->add_image();
    $main_view = new AddImage;
    $main_view->show();
  }

  //Shows user profile
  function profile() {
    $this->user_model->profile();
    $main_view = new Profile;
    $main_view->show();
  }


  //Reset pass?
  function reset()
  {
  }

  //Show an error
  function error()
  {
  }
}
