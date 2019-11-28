<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Alumni_Model");
		$this->load->library('session');
		$this->load->library('image_lib');
    }
    function resize_image($sourcePath, $desPath, $width = '900', $height = '1980', $flag)
		{
		$this->image_lib->clear();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $sourcePath;
		$config['new_image'] = $desPath;
		$config['quality'] = '100%';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = $flag;
		$config['thumb_marker'] = '';
		$config['width'] = $width;
		$config['height'] = $height;
		$this->image_lib->initialize($config);
		chmod($config['new_image'], 777);
		if ($this->image_lib->resize())
		return true;
		return false;
		}	
	public function index()
	{		
		$this->load->view('index');
	}
	public function SignIn()
	{	
		$this->load->view("login");
		$email = trim($this->input->post('email'));
		$password = md5(trim($this->input->post('password')));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		// $userid = $this->Alumni_Model->validateAlumni($email, $password);
		// if(count($userid) == 1)
		// {
		// 	redirect(base_url().'Alumni/Dashboard');
		// }
		// else
		// {
		// 	$data['errors'] = "Invalid Username Or Password";
		// 	$this->session->set_flashdata($data);
			
		// 	redirect('Admin/index');
		// }
	}
	public function ReduntEmailCheck()
	{
		$response = array(
			'valid' => false,
			'message' => 'Post argument "user" is missing.'
		);

		if( isset($_POST['email']) ) {
			
			$user = $this->Alumni_Model->CheckRegisterEmail($_POST['email']);

			if( $user == 1) {
				// User name is registered on another account
				$response = array('valid' => false, 'message' => 'This email is already registered.');
			} else {
				// User name is available
				$response = array('valid' => true);
			}
		}
		echo json_encode($response);
	}		
	public function register()
	{
		$data['degree']=$this->Alumni_Model->getAllCourses();
		$data['dept']=$this->Alumni_Model->getAllDepartments();
		$this->load->view('register',$data);
	}
	// public function AddEducation()
	// {
	// 	$cq = $_GET['cq'];
	// 	$data['degree']=$this->Alumni_Model->getAllCourses();
	// 	$data['dept']=$this->Alumni_Model->getAllDepartments();

	// 	$alumniData.= '	<div class="form-select-list col-lg-12">
	// 					<label>Qualification</label>
	// 					<select name="qualification'.$cq.'" id="qualification'.$cq.'" class="form-control pointer">
	// 					<option value="">--- Select ---</option>';
	// 					foreach($degree as $row){
	// 	$alumniData.= '<option value="'.$row->degree_id.'">'.$row->degree_name.'</option>';
	// 					} 
	// 	$alumniData.= '</select></div>';
	// 	$alumniData.= '<div class="form-select-list col-lg-12">
	// 					<label>Department</label>
	// 					<select name="dept'.$cq.'" id="dept'.$cq.'" class="form-control pointer">
	// 					<option value="">--- Select ---</option>';
	// 					foreach($dept as $row){
	// 	$alumniData.= '<option value="'.$row->id.'">'.$row->name.'</option>';
	// 					}
	// 	$alumniData.= '</select></div>';				
	// 	$alumniData.= '<div class="form-select-list col-lg-6">
	// 					<label>Enter Institution Name</label>
	// 					<input type="text" name="institute'.$cq.'" id="institute'.$cq.'" class="form-control pointer">
	// 					</div>';				
	// 	$alumniData.= '<div class="form-select-list col-lg-6">
	// 					<label>Year of Passing</label>
	// 					<select name="yop'.$cq.'" id="yop'.$cq.'" class="form-control pointer">
	// 					<option value="">--- Select ---</option>
	// 					</select>
	// 					</div>';

	// 	echo json_encode($alumniData);
	
	// }
	public function RegisterAlumni()
	{
		$fname = trim($_POST['fname']);
		$mname=trim($_POST['mname']); 
		$lname = trim($_POST['lname']);
		$data['name']= trim($fname." ".$mname." ".$lname);
		// $data['name'] = ($_POST['fname'].' '.$_POST['mname'].$_POST['lname']);
		$data['email'] = trim($_POST['email']);
		$data['password']=md5(trim($_POST['password']));
		$data['mobile'] = trim($_POST['mnum']);
		$data['phone'] = trim($_POST['pnum']);
		$data['present_address'] = trim($_POST['cadd']);
		$data['permanent_address'] = trim($_POST['padd']);
		$data['gender']=trim($_POST['gender']);
		$data['dob'] = date('Y-m-d',strtotime($_POST['dob']));
		$data['register_date'] = date('Y-m-d');
		$data['cur_organization']=trim($_POST['cur_org']);
		$data['cur_role']=trim($_POST['cur_role']);
		$data['website']=trim($_POST['website']);
		$temp_name = $_FILES['profile']['tmp_name'];
		$original = $_FILES['profile']['name'];
		$thmb = uniqid().$original;
		$data['profile_pic'] = ($original !=" ")? "./assets/images/alumni_imgs/".$original : $thmb;	
		if($this->Alumni_Model->InsertData('user_details', $data) && $this->resize_image($temp_name, './assets/images/alumni_imgs/'.$data['profile_pic'], 320, 370, 'true'))
		{		
			$this->session->set_flashdata('success', 'Registered Successfully');
		}
		else
		{
			$this->session->set_flashdata('error', 'Oops!, Something went wrong. Please Try Again');
		}
		redirect(base_url().'Alumni/SignIn');
		}

		// $temp_name = $_FILES['profile']['tmp_name'];
		// $original = $_FILES['profile']['name'];
		// $data['profile_pic'] = ($original != "")? "./assets/images/uploads/".$original : "";

		// for($i=0; $i<=$loop; $i++)
		// 	{
		// 		if(isset($_POST['user_id'.$i]))
		// 		{
		// 			$$data1['high_qual'] = $_POST['qualification'.$i];
		// 			$data1['dept'] = $_POST['dept'.$i];
		// 			$data1['passout_year']=$_POST['yop'.$i];
		// 			$this->Content->InsertData('education', $data1[$i]);
		// 		}
		// 	}	
		



	
}