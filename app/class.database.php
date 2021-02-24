<?php
/*
Author: Kailey Hart
Date: 02-12-2021
File: class.database.php
Description: Connect to the database
*/


class Database
{

  //Database parameters
  private $param = array(
    'hostname' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'photo_share',
    'userTbl' => 'final_users',
    'galleryTbl' => 'final_gallery'
  );

  //Database connection & instance
  private $conn = NULL;
  static private $_instance = NULL;

  //constructor
  function __construct()
  {
    $this->conn = @new mysqli(
      $this->param['hostname'],
      $this->param['user'],
      $this->param['password'],
      $this->param['database']
    );

    if (mysqli_connect_errno() != 0) {
      exit("Connecting to database failed: " . mysqli_connect_error());
    }
  }

  //Database instance
  static function getInstance()
  {
    if (self::$_instance == NULL) {
      self::$_instance = new Database();
    }
    return self::$_instance;
  }

  //Returns the database connection 
  function getSQL()
  {
    return $this->conn;
  }

  //returns the users table
  function getUserTable()
  {
    return $this->param['userTbl'];
  }

  //Inserts user into DB
  function insert_user($sql)
  {

    if (!mysqli_query($this->conn, $sql)) {
      return "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }

  //returns the gallery table
  function getGalleryTable()
  {
    return $this->param['galleryTbl'];
  }

  //Inserts gallery into DB
  function insert_gallery($sql)
  {

    if (!mysqli_query($this->conn, $sql)) {
      return "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }

  function get_last_username($sql)
  {
    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();

    if (!mysqli_query($this->conn, $sql)) {
      return "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }

    return $row;
  }
}
