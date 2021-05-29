<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class qlyuser extends CI_Controller {


	public function __construct()
        {
                parent::__construct();
                $this ->load ->model('QL_ND');
        }

        public function index()
        {       
            $data['data5'] = $this->QL_ND->muontra();
            $this->load->helper('url');           
            return $this->load->view('admin/qlyuser.php', $data);
        }
    
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */