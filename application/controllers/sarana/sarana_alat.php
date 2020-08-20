<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sarana_alat extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('sarana/SARANA_ALAT');
		$this->load->view('tampilan_web/FOOTER');
    }
}