<?php

/**
 * 
 */
class Pt extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('Pt_model');
	}

	function index()
	{
		$data['data_pt'] = $this->pt_model->ambil_data();
		$this->load->view('pt/pt_list', $data);
	}

	public function tambah()
	{
		$data = array(
			'action'				=> site_url('pt/tambah_aksi'),
			'id_pt'					=> set_value('id_pt'),
			'nama_pt'				=> set_value('nama_pt'),
			'password'				=> set_value('password'),
			'button'				=> 'Tambah'
		);
		$this->load->view('pt/pt_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_pt'		=> $this->input->post('id_pt'),
			'nama_pt'	=> $this->input->post('nama_pt'),
			'password'	=> $this->input->post('password')
		);
		$this->pt_model->tambah_data($data);
		redirect(site_url('pt'));
	}

	public function delete($id)
	{
		$this->pt_model->hapus_data($id);
		redirect(site_url('pt'));
	}

	function edit($id)
	{
		$mhs = $this->pt_model->ambil_data_id($id);
		$data = array(
			'action'			=> site_url('pt/edit_aksi'),
			'id_pt'				=> set_value('id_pt', $mhs->id_pt),
			'nama_pt'			=> set_value('nama_pt', $mhs->nama_pt),
			'password'			=> set_value('password', $mhs->password),
			'button'			=> 'Edit'
		);
		$this->load->view('pt/pt_form', $data);
	}

	function lihat($id)
	{
		$data['data_pt'] = $this->pt_model->ambil_data_idd($id);
		$this->load->view('pt/pt_list', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_pt'				=> $this->input->post('id_pt'),
			'nama_pt'			=> $this->input->post('nama_pt'),
			'password'			=> $this->input->post('password')
		);
		$id = $this->input->post('id_pt');
		$this->pt_model->edit_data($id, $data);
		redirect(site_url('pt'));
	}
}
