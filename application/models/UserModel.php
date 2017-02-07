<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     function userCheck($usr)
     //function userCheck($usr, $pwd)
     {
          $sql = "select * from user where username = '" . $usr . "'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}?>