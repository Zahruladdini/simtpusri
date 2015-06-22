<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    function __construct(){
        parent::__construct();

        $this->load->helper('form','url','html');
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
        $id=$this->uri->segment(3);
        $this->load->model('mt_model');
        $data['hasil'] = $this->mt_model->per_id($id);
        $this->load->view('formkelas',$data);
    }

    function upload() {
        if($this->input->post('submit')) {
            $config = array(
                'upload_path'     => "./upload/",
                'upload_url'      => base_url()."files/",
                'allowed_types'   => "gif|jpg|png|jpeg|pdf|doc|xml",
                'overwrite'       => TRUE,
                'max_size'        => "1000KB",
                'max_height'      => "768",
                'max_width'       => "1024",
                'file_name' => url_title($this->input->post('userfile'))
            );
            $this->load->library('upload', $config);
            $file = $this->upload->file_name;
            $nama = $this->input->post('nama');
            $tgl = $this->input->post('tanggalawal');
            $jammulai = $this->input->post('jammulai');
            $desc = $this->input->post('deskripsi');
            $id=$this->uri->segment(3);
            $jamselesai = $this->input->post('jamselesai');
            $instruktur = $this->input->post('instruktur');

            $this->db->insert('materi',array(
                'file_path' => $file,
                'nama_materi' => $nama,
                'tanggal' => $tgl,
                'id_kegiatan' => $id,
                'jam_mulai' => $jammulai,
                'jam_akhir' => $jamselesai,
                'deskripsi' => $desc,
                'instruktur' => $instruktur
            ));
            redirect("kegiatan/tambahmateri/$id");
        }
    }

    public function formmateri()
    {
        $this->load->view('formmateri');
    }

    public function tambahkelas()
    {
        $id = $this->uri->segment(3);
        $this->load->model('mt_model');
        $data= array('nama_kegiatan' => $this->input->post('namakelas'),
            'tanggal_mulai' => $this->input->post('tanggalawal'),
            'tanggal_akhir' => $this->input->post('tanggalakhir'),
            'id_mt' => $id
            );
        $this->mt_model->tambahkelas($data);
        redirect("kegiatan/tambah/$id");
    }
    public function hapuskelas()
    {
        $id=$this->uri->segment(4);
        $id_mt=$this->uri->segment(3);
        $this->mt_model->hapuskelas($id);
        redirect ("kegiatan/tambah/$id_mt");
    }
    public function hapusmateri()
    {
        $id=$this->uri->segment(4);
        $id_mt=$this->uri->segment(3);
        $this->mt_model->hapusmateri($id);
        redirect ("kegiatan/tambahmateri/$id_mt");
    }
    public function editkelas()
    {
        $id=$this->uri->segment(4);
        $data['hasil']=$this->mt_model->per_idkelas($id);
        $this->load->view('editkelas',$data);
    }
    public function updatekelas()
    {
        $id=$this->uri->segment(4);
        $id_mt=$this->uri->segment(3);
        $data= array('nama_kegiatan' => $this->input->post('namakelas'),
            'tanggal_mulai' => $this->input->post('tanggalawal'),
            'tanggal_akhir' => $this->input->post('tanggalakhir'));
        $this->mt_model->updatekegiatan($id,$data);
        redirect ("kegiatan/tambah/$id_mt");
    }
}

