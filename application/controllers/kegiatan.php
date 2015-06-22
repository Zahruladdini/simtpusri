<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('mt_model');

    }
    public function index()
    {
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('mt_model');
        $data['hasil'] = $this->mt_model->list_data();
        $this->load->view('kegiatan',$data);
    }
    public function tambah()
    {
        $id=$this->uri->segment(3);
        $this->load->model('mt_model');
        $data['hasil'] = $this->mt_model->per_idkegiatan($id);
        $this->load->view('kegiatandetail',$data);
    }
    public function tambahmateri()
    {
        $id=$this->uri->segment(3);
        $this->load->model('mt_model');
        $data['hasil'] = $this->mt_model->per_idmateri($id);
        $this->load->view('detailkelas',$data);
    }
    public function formkelas()
    {
        $this->load->view('formkelas');
    }
    public function formmateri()
    {
        $this->load->view('formmateri');
    }
}

