<?php

/**
 * 
 */
class Customer extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('Customer_model');
	}

	function index()
	{
		$data['data_customer'] = $this->Customer_model->ambil_data();
		$this->load->view('customer/customer_list', $data);
	}

	public function tambah()
	{
		$data = array(
			'action'				=> site_url('customer/tambah_aksi'),
			'id_customer'			=> set_value('id_customer'),
			'nama_customer'			=> set_value('nama_customer'),
			'password'				=> set_value('password'),
			'tanggal_bergabung'		=> set_value('tanggal_bergabung'),
			'button'				=> 'Tambah'
		);
		$this->load->view('customer/customer_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_customer'		=> $this->input->post('id_customer'),
			'nama_customer'		=> $this->input->post('nama_customer'),
			'password'			=> $this->input->post('password'),
			'tanggal_bergabung'	=> $this->input->post('tanggal_bergabung')
		);
		$this->Customer_model->tambah_data($data);
		redirect(site_url('customer'));
	}

	public function delete($id)
	{
		$this->Customer_model->hapus_data($id);
		redirect(site_url('customer'));
	}

	function edit($id)
	{
		$mhs = $this->Customer_model->ambil_data_id($id);
		$data = array(
			'action'			=> site_url('customer/edit_aksi'),
			'id_customer'		=> set_value('id_customer', $mhs->id_customer),
			'nama_customer'		=> set_value('nama_customer', $mhs->nama_customer),
			'password'			=> set_value('password', $mhs->password),
			'tanggal_bergabung'	=> set_value('tanggal_bergabung', $mhs->tanggal_bergabung),
			'button'			=> 'Edit'
		);
		$this->load->view('customer/customer_form', $data);
	}

	function lihat($id)
	{
		$data['data_customer'] = $this->Customer_model->ambil_data_idd($id);
		$this->load->view('customer/customer_list', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_customer'		=> $this->input->post('id_customer'),
			'nama_customer'		=> $this->input->post('nama_customer'),
			'password'			=> $this->input->post('password'),
			'tanggal_bergabung'	=> $this->input->post('tanggal_bergabung')
		);
		$id = $this->input->post('id_customer');
		$this->Customer_model->edit_data($id, $data);
		redirect(site_url('customer'));
	}
}
