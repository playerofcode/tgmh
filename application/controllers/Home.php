<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		include APPPATH . 'third_party/src/Payment.php';
		include APPPATH . 'third_party/src/Validator.php';
		include APPPATH . 'third_party/src/Crypto.php';
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->load->model('Home_model','model');
	}
	public function index()
	{
		$this->load->view('home/index');
	}
	public function handleRegister()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mobno', 'Mobile Number', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('declear','Declearation','required');
		if ($this->form_validation->run()):
			$form=$this->input->post();
			$invitation_code=rand(100000,999999);
			$data=array(
				'name'=>$form['name'],
				'mobno'=>$form['mobno'],
				'email'=>$form['email'],
				'username'=>$form['username'],
				'password'=>$form['password'],
				'invitation_code'=>$invitation_code,
			);
			if($this->model->addUser($data)):
				$this->session->set_flashdata('msg', "You're registered successfully.");
	  				return redirect(base_url());
			else:
				$this->session->set_flashdata('msg', "Something went wrong. Try again");
	  				return redirect(base_url());
			endif;
		else:
			$this->index();
		endif;
	}
	public function login()
	{
		$this->load->view('home/login');
	}
	public function auth()
	{
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()):
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=array(
			'email'=>$email,
			'password'=>$password
		);
		if($this->model->auth($data)>0):
		$this->session->set_userdata('email', $email);
		return redirect(base_url().'welcome');
		else:
			$this->session->set_flashdata('msg', "Email/Password is incorrect. Try again.");
			return redirect(base_url('login'));
		endif;
			echo "success";
		else:
			$this->login();
		endif;
	}
	public function check_login()
		{
			if(empty($this->session->userdata('email'))):
				$this->session->set_flashdata('msg', "Please login to continue.");
	  			return redirect(base_url('login'));
			endif;
		}
		public function logout()
		{
			$this->session->unset_userdata('email');
			$this->session->set_flashdata('msg', "Logged out successfully");
			return redirect(base_url().'login');
		}
	public function welcome()
	{
		$this->check_login();
		$email=$this->session->userdata('email');
		$this->load->view('home/header');
		$this->load->view('home/home');
		$this->load->view('home/footer');
	}
	public function profile()
	{
		$this->check_login();
		$email=$this->session->userdata('email');
		$data['profile']=$this->model->userFinder($email);
		$this->load->view('home/header');
		$this->load->view('home/profile',$data);
		$this->load->view('home/footer');
	}
	public function edit_profile()
	{
		$this->check_login();
		$email=$this->session->userdata('email');
		$data['profile']=$this->model->userFinder($email);
		$this->load->view('home/header');
		$this->load->view('home/edit_profile',$data);
		$this->load->view('home/footer');
	}
	public function update_profile()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mobno', 'Mobile Number', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('username', 'Username', 'trim');
		$this->form_validation->set_rules('bio', 'Bio', 'trim|max_length[256]');
		if ($this->form_validation->run()):
			$form=$this->input->post();
			$data=array(
				'name'=>$form['name'],
				'mobno'=>$form['mobno'],
				'username'=>$form['username'],
				'bio'=>$form['bio']
			);
			if($this->model->updateUser($data)):
				$this->session->set_flashdata('msg', "Your profile updated successfully.");
	  				return redirect(base_url('profile'));
			else:
				$this->session->set_flashdata('msg', "Something went wrong. Try again");
	  			return redirect(base_url('edit-profile'));
			endif;
		else:
			$this->edit_profile();
		endif;
	}
	public function invite_friend()
	{
		$this->check_login();
		$email=$this->session->userdata('email');
		$data['profile']=$this->model->userFinder($email);
		$this->load->view('home/header');
		$this->load->view('home/refer',$data);
		$this->load->view('home/footer');
	}
	public function recharge()
	{
		$this->check_login();
		$this->load->view('home/header');
		$this->load->view('home/recharge');
		$this->load->view('home/footer');
	}
	public function rechargeProcess()
		{
		$this->check_login();
		$data=$this->model->userFinder($this->session->userdata('email'));
		$form_amount=$this->input->post('amount');
		$fname          = $data[0]->name;
		$product_name   = 'Recharge';
		$email          = $data[0]->email;
		$amount         = $form_amount;
		$contact        = $data[0]->mobno;;
		$country        = 'India';
		$state          = 'Uttar Pradesh';
		$city           = '';
		$postalcode     = '';
		$address        = '';
		$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
		// $successUrl = str_replace("request", "successs", $_SERVER['HTTP_REFERER']);
		// $failUrl 	= str_replace("request", "failed", $_SERVER['HTTP_REFERER']);
		$successUrl=base_url('home/successpayy');
		$failUrl =base_url('home/failurepayment');
		$microtime = str_replace('.', '', microtime(true));
		$p_id=substr($microtime, 0, 14);
		$obj->initOrder($p_id, $product_name,  $amount, $successUrl,  $failUrl, 'INR');
		$obj->addCustomer($fname, $email, $contact);
		$obj->addShippingAddress($country,$state,$city,$postalcode,$address);
		$obj->addBillingAddress($address,$city,$state,$country,$postalcode);
		//$obj->setCustomFields(array('udf_1' =>$custom_field_1.'0'));
		echo $obj->submit();
		}
		public function successpay()
		{
		$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
		$response = $obj->getTransactionInfo($_REQUEST['payment-id']);
		if(is_array($response) && !empty($response)) {
    	if($response['status'] && $response['data']['transaction']['status'] == "Success") {
    	$payment_id=$response['data']['transaction']['payment_id'];
		$payment_mode=$response['data']['transaction']['payment_mode'];
		$order_id=$response['data']['transaction']['order']['order_id'];
		//$payment_for=$response['data']['transaction']['order']['product_name'];
 	    //$payment_status=$response['data']['transaction']['status'];
		$gross_amount=$response['data']['transaction']['order']['gross_amount'];
		$name=$response['data']['transaction']['customer']['name'];
		$email_id=$response['data']['transaction']['customer']['email_id'];
		$mobno=$response['data']['transaction']['customer']['mobile_no'];
		$data=array(
			'payment_id'=>$payment_id,
			'payment_mode'=>$payment_mode,
			'order_id'=>$order_id,
			'gross_amount'=>$gross_amount,
			'name'=>$name,
			'email'=>$email_id,
			'mobno'=>$mobno,
		);
		$current_balance=$this->model->currentBalanceFinder($this->session->userdata('email'));
		$remain_balance=$current_balance+$gross_amount;
		if($this->model->balanceUpdater($this->session->userdata('email'),$remain_balance)):
			if($this->model->addTransactionHistory($data))
		    {
			$this->session->set_flashdata('msg', "Wallet recharge successfully"); 
			redirect(base_url('profile'));
			}
		    else 
		    {
		      $this->session->set_flashdata('msg', "Transaction Failed"); 
					redirect(base_url('profile'));
		    }
		endif;
        }
		}
		}
		public function failurepayment()
		{
		$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
				$response = $obj->getTransactionInfo($_REQUEST['payment-id']);
				if(is_array($response) && !empty($response)) {
				if($response['status'] && $response['data']['transaction']['status'] == "Failed") {
		        $this->session->set_flashdata('msg', "Transaction Failed. Try again later."); 
					redirect(base_url().'profile');
		    }
			}
		}
		public function post()
		{
		$this->check_login();
		$this->load->view('home/header');
		$this->load->view('home/post');
		$this->load->view('home/footer');
		}
		public function create_post()
		{
					$content="hello";
					header('Content-type: image/jpeg');
				 	$font=realpath('assets/fonts/arial.ttf');
					$img=base_url('assets/img/final1.jpg');
					$image=imagecreatefromjpeg($img);
					$color=imagecolorallocate($image, 253, 253, 223);
					imagettftext($image, 12, 0, 25, 25, $color,$font, $content);
					imagejpeg($image);
					imagedestroy($image);die;
			$this->form_validation->set_rules('content','Content','required|max_length[256]');
			if($this->form_validation->run()):
				$content=$this->input->post('content');
				$content="hello";
				 	header("Content-type: image/jpeg");
				 	$font=realpath('assets/fonts/arial.ttf');
					$img=base_url('assets/img/final2.png');
					$image=imagecreatefrompng($img);
					$color=imagecolorallocate($image, 253, 253, 223);
					imagettftext($image, 12, 0, 25, 25, $color,$font, $content);
					imagejpeg($image);
					imagedestroy($image);
				  
			else:
				$this->post();
				//waaajhbhj
			endif;
			
		}
}
