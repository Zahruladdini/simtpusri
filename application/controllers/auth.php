<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('model_user');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function cek_login()
    {
        $data = array('username' => $this->input->post('username') ,
            'password' => $this->input->post('password')
        );
        $hasil = $this->model_user->cek_user($data);
        if ($hasil->num_rows() == 1){
            foreach($hasil->result() as $sess)
            {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['username'] = $sess->username;
                $this->session->set_userdata($sess_data);
            }
            redirect('home');
        }
        else
        {
            echo " <script>alert('Masukkan username dan password!');history.go(-1);</script>";
        }

    }

    public function logout() {
        $this->session->sess_destroy();
        $this->load->view('welcome_message');
    }

}