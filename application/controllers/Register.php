<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
		$this->load->view('template/footer');
	}
	//send sms from 18103206589 to phone number
	public function sendSMS($to,$text)
	{
		// $to='12403085501'
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
	//register organizatin and users to database
	public function register()
	{
		//read registration data
		$org_data['organization_name'] = $this->input->post('org_name');
		$org_data['organization_address'] = $this->input->post('org_add');
		$org_data['organization_unit'] = $this->input->post('org_unit');
		$org_data['organization_city'] = $this->input->post('org_city');
		$org_data['organization_state'] = $this->input->post('org_state');
		$org_data['organization_country'] = $this->input->post('org_country');
		
		$emp_data['employee_name'] = $this->input->post('emp_name');
		$emp_data['employee_role'] = $this->input->post('emp_title');
		$emp_data['employee_email'] = $this->input->post('emp_email');
		$emp_data['employee_countrycode1'] = $this->input->post('emp_ccode1');
		$emp_data['employee_cell1'] = $this->input->post('emp_cell1');
		$emp_data['employee_countrycode2'] = $this->input->post('emp_ccode2');
		$emp_data['employee_cell2'] = $this->input->post('emp_cell2');
		$emp_data['employee_password'] =hash('sha256',$this->input->post('emp_password'));
		//check if  organization name already exists
		$org_name = array('organization_name' => $org_data['organization_name']);
		$result=$this->Users_model->get_single('organizations',$org_name);
		//if exists
		if($result){
			// echo json_encode("organization already exists");
			$this->Users_model->update_data('organizations',$org_data,$org_name);
			$org_id=$result->organization_id;
		}
		//if not exists
		else{
			$id=$this->Users_model->get_max_id('organizations');
			if($id==0) $id=10000000;
			$org_id_num=$this->generateRandomNumber(10);
			$org_id_str=$this->generateRandomString(3);
			$org_id=$org_id_num.$org_id_str;
			$org_data['id']=$id+1;
			$org_data['organization_id']=$org_id;
			
			$this->Users_model->insert_data('organizations', $org_data);
		}
		//check if employee email exists
		$emp_email=array('employee_email' => $emp_data['employee_email']);
		$result=$this->Users_model->get_single('users',$emp_email);
		//if exists
		if($result){
			$verify_code = $this->generateRandomNumber(8);//make verify code
			$emp_data['verify_code']=$verify_code;
			$emp_data['organization_id']=$org_id;
			$this->Users_model->update_data('users', $emp_data, $emp_email);
			// echo json_encode("employee already exists");
		}
		//if not exists
		else{
			$id=$this->Users_model->get_max_id('users');
			if($id==0) $id=10000000;
			$emp_data['id']=$id+1;
			$emp_data['organization_id']=$org_id;
			
			$verify_code = $this->generateRandomNumber(8);//make verify code
			$emp_data['verify_code']=$verify_code;
			$this->Users_model->insert_data('users', $emp_data);
		}
		
		// $message="success";
		$to=$emp_data['employee_countrycode2'].$emp_data['employee_cell2'];
		// $to="12403085501";
		$text=$emp_data['verify_code'];
		// $message=$this->sendSMS($to,$text);
		// $message="success";
		echo json_encode($text);
		// $this->load->view('welcome_message');
	}
	public function update(){
		
	}
	public function delete(){

	}
	// get user with email and cell2	
	public function get(){
		$emp_data=array('employee_email'=>$this->input->post('emp_email'),'employee_cell2'=>$this->input->post('emp_cell2'));
		$result=$this->Users_model->get_single('users',$emp_data);
		echo json_encode($result->verify_code);
	}
	//get user with email
	public function get_email(){
		$email=array('employee_email'=>$this->input->post('emp_email'));
		$result=$this->Users_model->get_single('users',$email);
		echo json_encode($result->employee_email);
	}
	//get user with cell1
	public function get_cell1(){
		$cell1=array('employee_countrycode1'=>$this->input->post('emp_ccode1'),'employee_cell1'=>$this->input->post('emp_cell1'));
		$result=$this->Users_model->get_single('users',$cell1);
		echo json_encode($result->employee_cell1);
	}
	//get user with cell2
	public function get_cell2(){
		$cell2=array('employee_countrycode2'=>$this->input->post('emp_ccode2'),'employee_cell2'=>$this->input->post('emp_cell2'));
		$result=$this->Users_model->get_single('users',$cell2);
		echo json_encode($result->employee_cell2);
	}
	//update cell_verified field of user table after cell verified
	public function update_cell_verified(){
		$cell2=array('employee_countrycode2'=>$this->input->post('emp_ccode2'),'employee_cell2'=>$this->input->post('emp_cell2'));
		$emp_data['cell_verified']=1;
		$result=$this->Users_model->update_data('users',$emp_data,$cell2);
		echo json_encode($result);
	}
	//
	public function matchcode()
	{
		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == true)
        {
			$data1 = array('code' => $this->input->post('code'), 'email' => $this->input->post('email'));
			$get_data = $this->home_model->get_single('user_registration', $data1);
			if($get_data!=''){		
				$update_page = $this->home_model->update_data('user_registration',array('code' => ''), array('email' => $this->input->post('email')));
				echo "match";
			}else{
				echo "wrong";
			}
		}
	}
	//generate randomstring with alphabet
	public function generateRandomString($length = 3) {
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	//generate random string with numbers
	public function generateRandomNumber($length = 10) {
		$characters = '1234567890';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
// end code vaib

}
