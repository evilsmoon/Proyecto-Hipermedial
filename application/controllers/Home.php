
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Test');
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->load->view('template/Header');
        $this->load->view('template/Navbar');
        $this->load->view('Home');
        $this->load->view('template/Footer');
    }

    public function test()
    {

        $this->load->view('template/Header');
        $this->load->view('template/Navbar');
        $this->load->view('Test');
        $this->load->view('template/Footer');
    }

    public function file_upload()
    {

        $data['id_user']   = $this->input->post('inputID_User');
        $data['title']     = $this->input->post('input_Title');
        $data['desc']      = $this->input->post('input_Descrip');

        $config['upload_path']          = APPPATH . '../assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $this->load->library('upload', $config);



        if (!$this->upload->do_upload('input_File')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('template/Header');
            $this->load->view('template/Navbar');
            $this->load->view('Test', $error);
            $this->load->view('template/Footer');
        } else {
            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();
            //get the uploaded file name
            $data['file'] = $upload_data['file_name'];
            //store pic data to the db
            $this->M_Test->insertFile($data);
            redirect(base_url());
        }
    }

    public function upload_file_User()
    {
        $data = [
        "id_user"  => $this->input->post('id_user'),
        "title"    => $this->input->post('title'),
        "desc"     => $this->input->post('desc'),
        "file"     => $this->input->post('file'),
        ];

        $mi_archivo = 'upload';

        if (!is_dir("upload/".$this->session->userdata('id')."/")) {
            mkdir("upload/".$this->session->userdata('id')."/",777);
        }
        $config['upload_path'] = "upload/".$this->session->userdata('id')."/";
        $config['file_name'] = $this->session->userdata('id');
        $config['allowed_types'] = "jpg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $config['overwrite']=true;

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {            
           
            return;
        }
    }
}
