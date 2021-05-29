<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_Pm extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

    public function add_data() 
	{
        $var=NULL;
 		if (isset($_POST['masach'])) {
      	foreach($_POST['masach'] as $value){
		if ($var==NULL){
      		$var=$value;}
      		else{$var=$value.",".$var;}
			}}

      	$id_account=$_POST['id_account'];
		$isDate=date("m/d/y");
		// $ngaymuon=$_POST['ngaymuon'];
		$ngaytra=$_POST['ngaytra'];
		$quanlythuvien=$_POST['quanlythuvien'];
         //Xử lý các phần tử được chọn
      		$query = "insert into tb_muontra (	id_muon, masach, id_account, ngaymuon, ngaytra, quanlythuvien ) values 
									(NULL, '$var', '$id_account', '$isDate','$ngaytra','$quanlythuvien')";
				$this->db->query($query);
       	
			
    }

    public function getdata() 
	{
        $query = $this->db->query("select * from tb_muontra");
        return $query->result();
    }

    public function del($id_muon_lay) 
	{
		$query = "delete from tb_muontra where id_muon ='$id_muon_lay'";
		$this->db->query($query);
    }
	
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */