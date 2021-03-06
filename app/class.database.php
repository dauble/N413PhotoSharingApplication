<?php
/*
Author: Kailey Hart
Date: 02-12-2021
File: class.database.php
Description: Connect to the database
*/


class Database {

    //Database parameters
    private $param = array(
        'hostname' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'photo_share',
        'userTbl' => 'final_users'
    );

     //Database connection & instance
    private $conn = NULL;
    static private $_instance = NULL;

    //constructor
   function __construct() {
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
    static function getInstance() {
        if (self::$_instance == NULL) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    //Returns the database connection 
    function getSQL() {
        return $this->conn;
    }

    //returns the users table
    function getUserTable() {
        return $this->param['userTbl'];
    }
}

// class Database
// {

//     private $user;
//     private $password;
//     private $database;
//     private $hostname;
    
//    // private $conn;
//      function __construct()
//     {
//         $this->user = "root";
//         $this->password = "";
//         $this->database = "photo_share";
//         $this->hostname = "localhost";
//         //$this->conn = "conn";
//     }

//     public function getSQL($sql)
//     {
//         $this->conn = mysqli_connect($this->hostname, $this->user, $this->password, $this->database);

//         if (!$this->conn) {
//             return "connection failed. " . $this->conn->connect_error;
//         }

//         //return $this->conn; 
//          $result = $this->conn->query($sql);

//         $results = array();

//         if ($result->num_rows > 0) {
//             while ($row = $result->fetch_assoc()) {
//                 $results[] = $row;
//             }
//             return $results;
//            // print_r($results);
//         }
//         //print_r($results);
//     }

   
    
// }




