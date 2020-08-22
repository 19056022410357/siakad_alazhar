<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends CI_Controller {
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
    public function galeri_vidio()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Galeri/GALERI_VIDIO');
		$this->load->view('tampilan_web/FOOTER');
    }
}