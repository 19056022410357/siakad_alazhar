<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/KONTAK');
		$this->load->view('tampilan_web/FOOTER');
    }
}