<?php
// session_start();
class User extends CI_Controller
{

public function __construct(){
parent::__construct();
$this->load->helper('form');
$this->load->library('session');
$this->load->library('form_validation');
$this->load->model('Login_model');

}

 public function index()
  {
    
$this->load->view('login_view');

 }
 public function login()
 {
 	$this->form_validation->set_rules('username','Username','required');
 	$this->form_validation->set_rules('password','Password','required');
   if($this->form_validation->run()== FALSE){
   	if(isset($this->session->userdata['logged_in'])){
           $this->load->view('admin_page');
           }else{
            $this->load->view('login_view');
                 }
            }//run
            else
            	{
            		$data = array(
            			'username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
                     );
                    $result = $this->Login_model->login($data);
            		if($result == TRUE)
            		{
                     $user = $this->input->post('username');
                     $result = $this->Login_model->userinfo($user);
            		}
            		if($result != FALSE)
            		{
            			$session_data = array(
                        'username' => $result[0]->username,
                        'id' => $result[0]->id,
                         );

            		    $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('admin_page');
                    }
                 
               else {
               $data = array(
                   'error_message' => 'Invalid Username or Password'
                        );
                $this->load->view('login_view', $data);
               }
            	}//run else part
  
 }//login

 // Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login_view', $data);
}

}//class

?>