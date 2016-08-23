<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($email, $pwd)
     {
          $sql = "select * from users where email = '" . $email . "' and password = '" . md5($pwd) . "'";
          $query = $this->db->query($sql);
          return $query;
     }

     function get_user2($phone, $pwd)
     {
          $sql = "select * from grammarTestUsers where phone = '" . $phone . "' and password = '" . md5($pwd) . "'";
          $query = $this->db->query($sql);
          return $query;
     }

     function get_user_by_email($email)
     {
          $sql = "select * from users where email = '" . $email . "'";
          $query = $this->db->query($sql);
          return $query;
     }


     function get_user_by_phone($phone)
     {
          $sql = "select * from grammarTestUsers where phone = '" . $phone . "'";
          $query = $this->db->query($sql);
          return $query;
     }

     function create_user($name, $email, $password){
          $sql = "INSERT INTO users (name, email, password)
                  VALUES ('{$name}', '{$email}','" . md5($password) . "');";
          $query = $this->db->query($sql);
          return $query;
     }
}?>