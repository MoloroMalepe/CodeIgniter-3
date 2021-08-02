<?php
Class User_model extends CI_Model
{
	Public function __construct()
	{
		Parent::__construct();
	}

function can_login($username,$password){
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$query=$this->db->get(users);
	           //SELECT * FROM users where username=$username AND passwor=$password

	 if ($query->num_rows()>0)
	 {
		return true;
	 }
	else
	{
     return false;
			   
	}
     
}
}
?>
