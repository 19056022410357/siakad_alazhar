<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/PROFIL');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function visi_misi()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/VISI_MISI');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function dasar()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/DASAR');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function kegiatan()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/KEGIATAN');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function prestasi_lain()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/PRESTASI_LAIN');
		$this->load->view('tampilan_web/FOOTER');
    }
    public function kontak()
    {
        $this->load->view('tampilan_web/BERANDA');
		$this->load->view('Informasi/KONTAK');
		$this->load->view('tampilan_web/FOOTER');
    }
}