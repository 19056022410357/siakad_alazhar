<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prestasi_lain extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/PRESTASI_LAIN');
		$this->load->view('tampilan_web/FOOTER');
    }
}