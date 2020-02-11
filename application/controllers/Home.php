<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// menampilkan Halaman Login
	public function index()
	{
		$this->load->view('menu/v_login.php');
	}
	// menampilkan halaman daftar absen user
	public function daftar_absen()
	{
		$this->load->view('menu/v_daftarabsen');
	}
	// menampilkan halaman detail lokasi
}