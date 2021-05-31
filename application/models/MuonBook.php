<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MuonBook extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

    public function add_data() 	{
        
		$masach=$_POST['masach'];
		$id_account=$_POST['id_account'];
		$ngaymuon=$_POST['ngaymuon'];
		$ngaytra=$_POST['ngaytra'];
		$quanlythuvien=$_POST['quanlythuvien'];

		$query = "insert into tb_wait_muontra (	id_muon, masach, id_account, ngaymuon, ngaytra, quanlythuvien ) values 
									(NULL, '$masach', $id_account, '$ngaymuon','$ngaytra','$quanlythuvien')";
		$this->db->query($query);
    }
	
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */