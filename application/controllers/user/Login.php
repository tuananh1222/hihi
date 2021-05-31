<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QL_ND');	
		
	}

	public function index()
	{
		$this->load->view('user/login_view2.php');	
	
		if($this->input->post('login')){
   
			$dlieu = array(
			'username' =>$this->input->post('username'),
			'password' =>$this->input->post('password')
			  );
			$result = $this->QL_ND->checkLogin($dlieu);				
				if($result == true){
					   $tbao= $this->QL_ND->user();
					foreach ($tbao as $row) {
						   if ($dlieu['username']==$row->username && $row->level == 0 ) {
								 //Lưu tên đăng nhập
								 $_SESSION['tb'] = $row->fullname;
								 $_SESSION['em'] = $row->email; 
								 $_SESSION['id']=$row->id_account;
								echo '<script language="javascript">';
								echo 'alert("Thành công")';
								echo '</script>';
								header('location:http://localhost/hihi/index.php/User/user'); 							   
						  }
						  else{
							if ($dlieu['username']==$row->username && $row->level == 1 ) {
								//Lưu tên đăng nhập
								$_SESSION['tb1'] = $row->fullname;
								$_SESSION['em'] = $row->email; 
								$_SESSION['id']	= $row->id_account;
							   echo '<script language="javascript">';
							   echo 'alert("Thành công")';
							   echo '</script>';
							   header('location:http://localhost/hihi/index.php/admin/admin');
						  }	
				 		}
					}
				}
				 	else
					 {
						echo '<script language="javascript">';
						echo 'alert("Thất bại")';
						echo '</script>';
					} 		
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */