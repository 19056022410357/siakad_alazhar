<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dasar extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/DASAR');
		$this->load->view('tampilan_web/FOOTER');
    }
}