<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ptk_siswa extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Ptk_siswa/DATA_GURU');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function siswa()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Ptk_siswa/DATA_SISWA');
		$this->load->view('tampilan_web/FOOTER');
    }
}