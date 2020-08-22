<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index($name='')
	{
		$data['berita']= $name;
		$this->load->view('tampilan_web/BERANDA');
		$this->load->view('tampilan_web/COVER_LEMBAGA');
		$this->load->view('tampilan_web/SAMBUTAN');
		$this->load->view('tampilan_web/BERITA_TERBARU', $name);
		$this->load->view('tampilan_web/TENAGA_PENDIDIK');
		$this->load->view('tampilan_web/PESERTA_DIDIK');
		$this->load->view('tampilan_web/EKSTRAKULIKULER');
		$this->load->view('tampilan_web/ALUMNI');
		$this->load->view('tampilan_web/GALERI_DOCUMENT');
		$this->load->view('tampilan_web/PRESTASI');
		$this->load->view('tampilan_web/FOOTER');
	}
	public function login()
	{
		$this->load->view('Sistem_akademik/LOGIN');
	}
	public function login1()
	{
		$this->load->view('Sistem_akademik/LOGIN1');
	}
}
