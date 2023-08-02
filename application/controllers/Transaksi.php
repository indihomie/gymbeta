<?php

/**
 * 
 */
class Transaksi extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('Transaksi_model');
	}

	function index()
	{

		$data['data_transaksi'] = $this->Transaksi_model->ambil_data();
		$this->load->view('transaksi/transaksi_list', $data);
	}

	public function tambah()
	{
		$data = array(
			'action'				=> site_url('transaksi/tambah_aksi'),
			'id_transaksi'			=> set_value('id_transaksi'),
			'id_pt'					=> set_value('id_pt'),
			'id_customer'			=> set_value('id_customer'),
			'id_paket'				=> set_value('id_paket'),
			'tanggal_transaksi'		=> set_value('tanggal_transaksi'),
			'button'				=> 'Tambah'
		);
		$this->load->view('transaksi/transaksi_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_transaksi'		=> $this->input->post('id_transaksi'),
			'id_pt'				=> $this->input->post('id_pt'),
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'			=> $this->input->post('id_paket'),
			'tanggal_transaksi'	=> $this->input->post('tanggal_transaksi')
		);
		$this->Transaksi_model->tambah_data($data);
		redirect(site_url('transaksi'));
	}

	public function delete($id)
	{
		$this->Transaksi_model->hapus_data($id);
		redirect(site_url('transaksi'));
	}

	function edit($id)
	{
		$mhs = $this->Transaksi_model->ambil_data_id($id);
		$data = array(
			'action'			=> site_url('transaksi/edit_aksi'),
			'id_transaksi'		=> set_value('id_transaksi', $mhs->id_transaksi),
			'id_pt'				=> set_value('id_pt', $mhs->id_pt),
			'id_customer'		=> set_value('id_customer', $mhs->id_customer),
			'id_paket'			=> set_value('id_paket', $mhs->id_paket),
			'tanggal_transaksi'	=> set_value('tanggal_transaksi', $mhs->tanggal_transaksi),
			'button'			=> 'Edit'
		);
		$this->load->view('transaksi/transaksi_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_transaksi'		=> $this->input->post('id_transaksi'),
			'id_pt'				=> $this->input->post('id_pt'),
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'			=> $this->input->post('id_paket'),
			'tanggal_transaksi'	=> $this->input->post('tanggal_transaksi')
		);
		$id = $this->input->post('id_transaksi');
		$this->Transaksi_model->edit_data($id, $data);
		redirect(site_url('transaksi'));
	}
}
