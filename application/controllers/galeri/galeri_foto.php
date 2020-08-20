<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri_foto extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Galeri/GALERI_FOTO');
		$this->load->view('tampilan_web/FOOTER');
    }
}