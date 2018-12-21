<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-09T21:41:47+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Csrf.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-21T06:04:03+07:00
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Csrf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Csrf_model');
    }

    public function index()
    {
        $data['dataCsrf'] = $this->Csrf_model->get_all();
        $this->load->view('csrf_form',$data);
    }

    public function create()
    {
        $data = array(
          'name' => $this->input->post('name'),
          'description' => $this->input->post('description'),
        );
        $this->db->insert('tbl_csrf', $data);
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('message', '
            <div class="ui blue message">
              <i class="close icon"></i>
              <div class="header">
                SUKSES!
              </div>
              <p>Data Berhasil Ditambahkan!</p>
            </div>
            ');
            redirect('');
        } else {
          $this->session->set_flashdata('message', '
          <div class="ui red message">
            <i class="close icon"></i>
            <div class="header">
              GAGAL!
            </div>
            <p>Data Gagal Ditambahkan!</p>
          </div>
          ');
          redirect('');
        }
    }
}
