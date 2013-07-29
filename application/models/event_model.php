<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Event_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function create_event($event_name)
 {
    //$query=$this->db->get("event");
	// $event_name    = $this->input->post('event_name');
 }
  /*if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'user_id'  => $rows->id,
      'user_name'  => $rows->username,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user1',$data);
 }*/
}
?>