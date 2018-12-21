<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-21T05:37:00+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Csrf_model.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-21T07:08:28+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

class Csrf_model extends CI_Model{

  private $table = 'tbl_csrf';
  private $id = 'tbl_csrf.id';

  function get_all()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->limit(7);
    $this->db->order_by($this->id,'desc');
    $query = $this->db->get();
    return $query->result();
  }

}
