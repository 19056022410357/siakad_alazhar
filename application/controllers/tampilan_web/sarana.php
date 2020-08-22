<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sarana extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Sarana/BANGUNAN');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function sarana_alat()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('sarana/SARANA_ALAT');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function sarana_ruang()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Sarana/SARANA_RUANG');
		$this->load->view('tampilan_web/FOOTER');
    }
}