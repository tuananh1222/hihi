<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_ND extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

    public function getdata() 
	{
        $query = $this->db->query("select * from tb_account where level = 0 ");
        return $query->result();
    }

    public function getadmin() 
	{
        $query = $this->db->query("select * from tb_account where level = 1 ");
        return $query->result();
    }

    public function get_all() 
	{
        $query = $this->db->query("select * from tb_account");
        return $query->result();
    }
	
	  public function muontra(){
		$query = "SELECT * 
					from tb_muontra as m right join tb_account as a on m.id_account = a.id_account
							left join tb_book b on m.masach = b.masach
					where level = 0";
        return $this->db->query($query)->result();
	}

	public function addmember() 
	{
        $fullname=$_POST['fullname'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query = "insert into tb_account (	id_account, fullname, phone, email, username, password, level) values 
									(NULL, '$fullname', '$phone', '$email','$username','$password', '0')";
		$this->db->query($query);
    }
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */