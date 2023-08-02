<?php

/**
 * 
 */
class Paket extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('Paket_model');
	}

	function index()
	{
		$data['data_paket'] = $this->Paket_model->ambil_data();
		$this->load->view('paket/paket_list', $data);
	}

	public function tambah()
	{
		$data = array(
			'action'				=> site_url('paket/tambah_aksi'),
			'id_paket'				=> set_value('id_paket'),
			'nama_paket'			=> set_value('nama_peket'),
			'ket_paket'				=> set_value('ket_paket'),
			'biaya'					=> set_value('biaya'),
			'id_pt'					=> set_value('id_pt'),
			'button'				=> 'Tambah'
		);
		$this->load->view('paket/paket_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_paket'		=> $this->input->post('id_paket'),
			'nama_paket'	=> $this->input->post('nama_paket'),
			'ket_paket'		=> $this->input->post('ket_paket'),
			'biaya'			=> $this->input->post('biaya'),
			'id_pt'			=> $this->input->post('id_pt')
		);
		$this->Paket_model->tambah_data($data);
		redirect(site_url('paket'));
	}

	public function delete($id)
	{
		$this->Paket_model->hapus_data($id);
		redirect(site_url('paket'));
	}

	function edit($id)
	{
		$mhs = $this->Paket_model->ambil_data_id($id);
		$data = array(
			'action'			=> site_url('paket/edit_aksi'),
			'id_paket'			=> set_value('id_paket', $mhs->id_paket),
			'nama_paket'		=> set_value('nama_paket', $mhs->nama_paket),
			'ket_paket'			=> set_value('ket_paket', $mhs->ket_paket),
			'biaya'				=> set_value('biaya', $mhs->biaya),
			'id_pt'				=> set_value('id_pt', $mhs->id_pt),
			'button'			=> 'Edit'
		);
		$this->load->view('paket/paket_form', $data);
	}

	function lihat($id)
	{
		$data['data_paket'] = $this->Paket_model->ambil_data_idd($id);
		$this->load->view('paket/paket_list', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_paket'			=> $this->input->post('id_paket'),
			'nama_paket'		=> $this->input->post('nama_paket'),
			'ket_paket'			=> $this->input->post('ket_paket'),
			'biaya'				=> $this->input->post('biaya'),
			'id_pt'				=> $this->input->post('id_pt')
		);
		$id = $this->input->post('id_paket');
		$this->Paket_model->edit_data($id, $data);
		redirect(site_url('paket'));
	}
}
