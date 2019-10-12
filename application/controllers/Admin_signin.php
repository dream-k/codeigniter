<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_signin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
		// $this->get_user();
        $this->load->model('Users_model');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('admin_signin');
		$this->load->view('template/footer');
	}
	//check if email already registered
	public function email_registered(){
		$email=array('employee_email'=>$this->input->post('emp_email'));
		$result=$this->Users_model->get_single('users',$email);
		echo json_encode($result->employee_email);
	}
	//chekc password matches with the db
	public function match_password(){
		$email=array('employee_email'=>$this->input->post('emp_email'));
		$result=$this->Users_model->get_single('users',$email);
		$match=0;
		if($result->employee_password==hash('sha256',$this->input->post('emp_password'))){
			$match=1;
		}
		else {
			$match=0;
		}
		echo json_encode($match);
	}
	//get user info with email
	public function get_user(){
		$email=array('employee_email'=>$this->input->post('emp_email'));
		$result=$this->Users_model->get_single('users',$email);
		$org_id=array('organization_id'=>$result->organization_id);
		$org_result=$this->Users_model->get_single('organizations',$org_id);
		$result->organization_name=$org_result->organization_name;
		echo json_encode($result);
	}
	//send sms function
	public function sendSMS(){
		$email=array('employee_email'=>$this->input->post('emp_email'));
		$data['verify_code']=$this->generateRandomNumber(8);
		$this->Users_model->update_data('users',$data,$email);
		$result=$this->Users_model->get_single('users',$email);
		$to=$result->employee_countrycode1.$result->employee_cell1;
		// $to="12403085501";
		$text=$data['verify_code'];
		// $message=$this->sendMessage($to,$text);
		echo json_encode($result);

	}
	//send message to phone
	public function sendMessage($to,$text){
		$basic  = new \Nexmo\Client\Credentials\Basic('1721e9e5', 'kk1NoaqN5Dh0ir1q');
		$client = new \Nexmo\Client($basic);
		$insights = $client->insights()->standard($to);
		$message = $client->message()->send([
			'to' => $to,
			'from' => '18103206589',
			'text' => $text
		]);
		return $message;
	}
	//generate random number
	public function generateRandomNumber($length = 10) {
		$characters = '1234567890';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}


}
