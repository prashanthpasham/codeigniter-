<?php
class Login_model extends CI_model
{
public function __construct()
{
parent::__construct();

}
public function login($data)
{
$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}//login function
public function userinfo($user)
{
$condition = "username =" . "'" . $user . "'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}	
}

}//class
?>