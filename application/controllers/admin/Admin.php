<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
 
        public function __construct()
        {
                parent::__construct();
                $this->load->model('QL_Sach');
        }

        public function index()
        {       
                $data['data1'] = $this->QL_Sach->dem_ms();  
                $data['data2'] = $this->QL_Sach->get_all();
                $this->load->view('admin/Admin_view.php',$data);
        }


        // public function cs_sach()
        // {
                 
        //         if ($this->input->get('id_book')) {
        //                 $id_book_lay = $this->input->get('id_book');
        //                 $this->QL_Sach->dele($id_book_lay);
        //                 redirect('index.php/admin/admin/cs_sach', 'refresh');
        //         }
        //         if ($this->input->post('update')) {
        //                 $this->QL_Sach->update();
        //                 redirect('index.php/admin/admin/cs_sach', 'refresh');
        //         }

        //         $searchlastname = $this->input->post('searchma');
        //         $data['data'] = $this->QL_Sach->getdata2($searchlastname);

        //         $this->load->view('admin/cs_sach.php', $data);
        // }

        // public function addmember()
        // {
        //         if ($this->input->post('them')) {
        //                 $this->Insert_model->addmember1();
        //                 echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
        //                 redirect('index.php/admin/addmember', 'refresh');
        //         }
        //         $this->load->view('admin/addmember.php');
        // }


        // public function themmoi()
        // {       

        //         $this->load->model('QL_Sach');
        //         if ($this->input->post('them')) {
        //                 $config['upload_path'] = './picture/';
        //                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //                 $config['file_name'] = $_FILES['img']['name'];

        //                 $this->load->library('upload', $config);
        //                 $this->upload->initialize($config);
        //                 $link = base_url() . "picture/" . $_FILES['img']['name'];
        //                 $this->upload->do_upload('img');

        //                 $this->QL_Sach->add_sach($link);
        //                 redirect('index.php/admin/admin/themmoi', 'refresh');
        //         }


        //         $this->load->view('admin/themmoi.php');
        // }

        // public function themanhspct()
        // {$this->load->library('upload');
        //         $data['data3'] = $this->Select_SPMB->home();
        //         $data['data4'] = $this->Select_SPMB->home2();
        //         $data['data'] = $this->Insert_model->getdata1();
        //         $data['data5'] = $this->Insert_model->getdatalist();
        //         if ($this->input->post('them')) {
        //                 $config['upload_path'] = './picture/';
        //                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //                 $config['file_name'] = $_FILES['img']['name'];

        //                 $this->load->library('upload', $config);
        //                 $this->upload->initialize($config);
        //                 $link = base_url() . "picture/" . $_FILES['img']['name'];
        //                 $this->upload->do_upload('img');
                        
        //                 $this->Insert_model->themanhspct($link);
        //                 redirect('index.php/admin/admin/themanhspct', 'refresh');
        //         }if ($this->input->get('id')) {
        //                 $id1 = $this->input->get('id');
        //                 $this->Insert_model->delelistanh($id1);
                        
        //                 redirect('index.php/admin/admin/themanhspct', 'refresh');
        //         }
        //         $this->load->view('admin/themanhspct.php', $data);
        // }
        // public function diachi()
        // {
        //         $data['data3'] = $this->Select_SPMB->home();
        //         $data['data4'] = $this->Select_SPMB->home2();
        //         $this->load->helper('url');
        //         $data['data'] = $this->Insert_model->getdata();
        //         if ($this->input->post('diachi')) {

        //                 $diachi = $this->input->post('diachi');
        //                 $this->Insert_model->saverecords1($diachi);
        //                 echo '<script language="javascript">alert("Đã sửa diachi thành công!");</script>';
        //                 redirect('index.php/admin/admin/diachi', 'refresh');
        //         }

        //         if ($this->input->post('sodienthoai')) {

        //                 $sodienthoai = $this->input->post('sodienthoai');
        //                 $this->Insert_model->saverecords2($sodienthoai);
        //                 echo '<script language="javascript">alert("Đã sửa sodienthoai thành công!");</script>';
        //                 redirect('index.php/admin/admin/diachi', 'refresh');
        //         }

        //         if ($this->input->post('email')) {


        //                 $email = $this->input->post('email');
        //                 $this->Insert_model->saverecords3($email);
        //                 echo '<script language="javascript">alert("Đã sửa email thành công!");</script>';
        //                 redirect('index.php/admin/admin/diachi', 'refresh');
        //         }
        //         return $this->load->view('admin/diachi', $data);
        // }
        // public function sachmuon()
        // {       $this->load -> model('QL_Sach');
        //         $data['dt'] = $this->QL_Sach->get_all();
        //         $this->load->helper('url');                
        //         return $this->load->view('admin/sachmuon.php', $data);
                
        // }
        // public function qlyuser()
        // {   $this ->load ->model('QL_ND');
        //     $data['data5'] = $this->QL_ND->muontra();
        //     $this->load->helper('url');              
        //     // if ($this->input->post('qlyuser')) {

        //     //         $diachi = $this->input->post('diachi');
        //     //         $this->Insert_model->saverecords1($diachi);
        //     //         echo '<script language="javascript">alert("Đã sửa diachi thành công!");</script>';
        //     //         redirect('index.php/admin/admin/qlyuser', 'refresh');
        //     // }

        //     // if ($this->input->post('sodienthoai')) {

        //     //         $sodienthoai = $this->input->post('sodienthoai');
        //     //         $this->Insert_model->saverecords2($sodienthoai);
        //     //         echo '<script language="javascript">alert("Đã sửa sodienthoai thành công!");</script>';
        //     //         redirect('index.php/admin/admin/qlyuser', 'refresh');
        //     // }

        //     // if ($this->input->post('email')) {


        //     //         $email = $this->input->post('email');
        //     //         $this->Insert_model->saverecords3($email);
        //     //         echo '<script language="javascript">alert("Đã sửa email thành công!");</script>';
        //     //         redirect('index.php/admin/admin/qlyuser', 'refresh');
        //     // }
        //     return $this->load->view('admin/qlyuser.php', $data);
        // }
        // yến đã thêm vào đây
        public function addadmin()
        {
                $data['data3'] = $this->Select_SPMB->home();
                $data['data4'] = $this->Select_SPMB->home2();
                if ($this->input->post('them')) {
                        $this->Insert_model->addadmin1();
                        echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
                        redirect('index.php/admin/admin/addadmin', 'refresh');
                }
                $this->load->view('admin/addadmin.php', $data);
        }
         public function editadmin()
        {
                $searchusername = $this->input->post('searchusername');
                $data['data3'] = $this->Select_SPMB->home();
                $data['data4'] = $this->Select_SPMB->home2();
                $data['data'] = $this->Insert_model->getdata4($searchusername);
                if ($this->input->get('id')) {
                        $id = $this->input->get('id');
                        $this->Insert_model->deleteadmin($id);
                        redirect('index.php/admin/admin/editadmin', 'refresh');
                }
                if ($this->input->post('add')) {
                        $this->Insert_model->dataadd1();
                        redirect('index.php/admin/admin/editadmin', 'refresh');
                }

                $this->load->view('admin/editadmin.php', $data);
        }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */