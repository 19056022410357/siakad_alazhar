<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita_sekolah extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Berita/BERITA_SEKOLAH');
		$this->load->view('tampilan_web/FOOTER');
    }
}