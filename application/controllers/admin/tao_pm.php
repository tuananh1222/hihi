<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tao_pm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QL_Sach');
		$this->load->model('QL_ND');
		$this->load->model('QL_Pm');
	}

	public function index()
	{
        $data['dt'] = $this->QL_Sach->get_all();
        $data['dt2'] = $this->QL_ND->get_all();
        $data['dt3'] = $this->QL_ND->getadmin();
        $data['data5'] = $this->QL_Pm->getdata();
		
		if ($this->input->get('id_muon')) {
            $id_muon_lay = $this->input->get('id_muon');
            $this->QL_Pm->del($id_muon_lay);
			echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
            redirect('index.php/admin/tao_pm', 'refresh');
    }

		if ($this->input->post('them')) {
            $this->QL_Pm->add_data();
            echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
            redirect('index.php/admin/tao_pm', 'refresh');
    	}

    	$this->load->view('admin/tao_pm.php',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */