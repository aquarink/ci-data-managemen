<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TaskModel extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     function taskJoinSite($limit, $page)
     //function userCheck($usr, $pwd)
     {
          $offset = ($page - 1) * $limit;
          $sql ="SELECT * FROM task,site WHERE task.`site_id` = site.`site_id` LIMIT $offset, $limit";
          $query = $this->db->query($sql);
          return $query->result();
     }

     function taskJoinSiteTotal()
     //function userCheck($usr, $pwd)
     {
          $sql ="SELECT * FROM task,site WHERE task.`site_id` = site.`site_id`";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

     function taskJoinSiteAll()
     {
          $sql ="SELECT * FROM task,site WHERE task.`site_id` = site.`site_id` LIMIT 500";
          $query = $this->db->query($sql);
          return $query->result();
     }
}?>