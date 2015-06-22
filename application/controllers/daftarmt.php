<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus diawali dengan kapital, walaupun nama file semua kecil
class Daftarmt extends CI_Controller {

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
        $this->load->view('mtbaru',$data);
    }
    public function baru()
    {
        $this->load->view('buatmt');
    }
    public function tambah()
    {
        $this->load->model('mt_model');
        $data= array('nama_mt' => $this->input->post('nama'),
            'jalur' => $this->input->post('jalur'),
            'batch' => $this->input->post('batch'),
            'tanggal_awal' => $this->input->post('tanggalawal'),
            'tanggal_akhir' => $this->input->post('tanggalakhir'));
        $this->mt_model->tambah($data);
        redirect('daftarmt');
	}

    public function edit()
	{
        $id=$this->uri->segment(3);
        $data['hasil']=$this->mt_model->per_id($id);
        $this->load->view('editmt',$data);
    }
    public function update()
    {
        $id=$this->uri->segment(3);
        $data= array('nama_mt' => $this->input->post('nama'),
            'jalur' => $this->input->post('jalur'),
            'batch' => $this->input->post('batch'),
            'tanggal_awal' => $this->input->post('tanggalawal'),
            'tanggal_akhir' => $this->input->post('tanggalakhir'));
        $this->mt_model->update($id,$data);
        redirect('daftarmt');
    }
    public function hapus()
    {
        $id=$this->uri->segment(3);
    	$this->mt_model->hapus($id);
	    redirect ('daftarmt');

    }


}