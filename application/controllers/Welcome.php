<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}
	
	public function index()
	{
		$data['content']='warga';
		$this->load->view('welcome_message' , $data);
	}

	public function Blok()
	{
		$data['DataPencarian']=$this->MSudi->GetData('blok_kavling');
		$data['content']='master/VBlok';
		$this->load->view('welcome_message',$data);
	}

	public function BlokInsert()
	{
		$add['kd_blok'] = $this->input->post('kd_blok');
		$add['nama_blok'] = $this->input->post('nama_blok');
		$add['no_blok'] = $this->input->post('no_blok');
		$add['lokasi'] = $this->input->post('lokasi');	
		$this->MSudi->AddData('blok_kavling', $add);
		redirect(site_url('Welcome/Blok'));
	}

	public function BlokEdit()
	{
		$kd_blok = $this->input->post('kd_blok');
		$update['nama_blok'] = $this->input->post('nama_blok');
		$update['no_blok'] = $this->input->post('no_blok');
		$update['lokasi'] = $this->input->post('lokasi');
		$this->MSudi->UpdateData('blok_kavling', 'kd_blok', $kd_blok, $update);
		redirect(site_url('Welcome/Blok'));
	}

	public function BlokHapus()
	{
		$kd_blok = $this->uri->segment(3);
		$this->MSudi->DeleteData('blok_kavling','kd_blok', $kd_blok);
		redirect(site_url('Welcome/Blok'));
	}

	public function Penduduk()
	{
		$data['DataPencarian']=$this->MSudi->GetData('penduduk');
		$data['select']	=$this->MSudi->GetKavling('penduduk');
		$data['content']='master/VPenduduk';
		$this->load->view('welcome_message',$data);
	}

	public function pendudukInsert()
	{
		$add['kd_penduduk'] = $this->input->post('kd_penduduk');
		$add['nik'] = $this->input->post('nik');
		$add['nama'] = $this->input->post('nama');
		$add['tempat_lahir'] = $this->input->post('tempat_lahir');	
		$add['tgl_lahir'] = $this->input->post('tgl_lahir');	
		$add['status1'] = $this->input->post('status1');	
		$add['status2'] = $this->input->post('status2');	
		$add['status3'] = $this->input->post('status3');	
		$add['kd_blok'] = $this->input->post('kd_blok');	
		$this->MSudi->AddData('penduduk', $add);
		redirect(site_url('Welcome/Penduduk'));
	}

	public function pendudukUpdate()
	{
		$kd_penduduk = $this->input->post('kd_penduduk');
		$update['nik'] = $this->input->post('nik');
		$update['nama'] = $this->input->post('nama');
		$update['tempat_lahir'] = $this->input->post('tempat_lahir');	
		$update['tgl_lahir'] = $this->input->post('tgl_lahir');	
		$update['status1'] = $this->input->post('status1');	
		$update['status2'] = $this->input->post('status2');	
		$update['status3'] = $this->input->post('status3');	
		$update['kd_blok'] = $this->input->post('kd_blok');	
		$this->MSudi->UpdateData('penduduk','kd_penduduk',$kd_penduduk, $update);
		redirect(site_url('Welcome/Penduduk'));
	}
	public function pendudukHapus()
	{
		$kd_penduduk = $this->uri->segment(3);
		$this->MSudi->DeleteData('penduduk','kd_penduduk', $kd_penduduk);
		redirect(site_url('Welcome/Penduduk'));
	}
}
