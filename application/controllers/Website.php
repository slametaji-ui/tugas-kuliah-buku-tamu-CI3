<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('WebsiteModel');
	}

	public function index()
	{
		if ($this->session->userdata('login') == 'true') {
			$data['judul'] = 'Buku Tamu STT Bandung';
			$this->load->view('dashboard', $data);
		} else {
			redirect('website/login');
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function cek_login()
	{
		$cek = $this->WebsiteModel->login($this->input->post('username'), MD5($this->input->post('password')));
		if ($cek) {
			$session_data = array(
				'id'   => $cek->id,
				'username' => $cek->username,
				'nama' => $cek->nama,
				'password' => $cek->password,
				'login' => 'true'
			);
			//set session userdata
			$this->session->set_userdata($session_data);
			redirect('');
		} else {

			redirect('website/login?notif=gagal');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('webisite/login');
	}

	public function signup()
	{
		$this->load->view('daftar');
	}

	public function daftarin()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'E', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => MD5($this->input->post('password')),
			);

			$this->db->insert('user', $data);
			redirect('website/signup?notif=berhasil');
		} else {
			redirect('website/signup?notif=gagal');
		}
	}


	public function isidaftar()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('pesan', 'Pesan', 'required');

			if ($this->form_validation->run() == TRUE) {

				$data = array(
					'nama' => $this->input->post('nama'),
					'email`' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'kota' => $this->input->post('kota'),
					'pesan' => $this->input->post('pesan')
				);

				$this->db->insert('guestbook', $data);
				$this->session->set_flashdata('sukses', "Pengguna berhasil ditambahkan.");
				redirect('website/isidaftar');
			} else {
				$this->session->set_flashdata('error', "Pengguna gagal ditambahkan.");
				redirect('website/isidaftar');
			}
		} else {
			$data['judul'] = 'Isi Daftar Tamu dulu';
			$this->load->view('isiguestbook', $data);
		}
	}


	public function lihatdaftar()
	{
		$data['headtitle'] = 'Daftar Tamu';
		$data['isi'] = $this->WebsiteModel->get_isi();
		$this->load->view('daftartamu', $data);
	}

	public function hapus($id)
	{ {
			if ($id == "") {
				$this->session->set_flashdata('error', "Tamu gagal dihapus.");
				redirect('website/lihatdaftar');
			} else {
				$this->db->where('id', $id);
				$this->db->delete('guestbook');
				$this->session->set_flashdata('sukses', "Tamu berhasil dihapus.");
				redirect('website/lihatdaftar');
			}
		}
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'nama' => $this->input->post('nama'),
				'email`' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'pesan' => $this->input->post('pesan')
			);

			$this->db->where('id', $id);
			$this->db->update('guestbook', $data);
			$this->session->set_flashdata('sukses', "Pengguna berhasil Ubah.");
			redirect('website/lihatdaftar');
		} else {
			$this->session->set_flashdata('error', "Pengguna gagal Ubah.");
			redirect('website/lihatdaftar');
		}
	}
	
}
