<?php
class Mt_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function list_data(){
        $query = $this->db->get('manajemen_training');// mengambil semua data dari tabel data_barang
        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
    }

    public function tambah($data){
        $tambah=$this->db->insert('manajemen_training',$data);
        return $tambah;
	}

    function per_id($id)
    {
    $this->db->where('id',$id);
    $query=$this->db->get('manajemen_training');
    return $query->result();
	}
    function per_idkegiatan($id)
    {
        $this->db->where('id_mt',$id);
        $query=$this->db->get('kegiatan');
        return $query->result();
    }
    function per_idmateri($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('materi');
        return $query->result();
    }
    function hapus($id)
	{
		$this->db->where('id',$id);
		$hapus=$this->db->delete('manajemen_training');
		return $hapus;
	}

    function update($id,$data)
    {
        $this->db->where('id',$id);
        $update=$this->db->update('manajemen_training',$data);
        return $update;
    }



}