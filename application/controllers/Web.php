<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('V_header', $data);
        $this->load->view('V_index', $data);
        $this->load->view('V_footer', $data);
    }
}
