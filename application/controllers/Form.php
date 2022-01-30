<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function index()
	{
		$this->load->model('Dapur_model');
		$judul = "Data Dapur Kita";
		$dapur = $this->Dapur_model->ambil_data();

		$data = array(
			'judul' => $judul,
			'dapur' => $dapur,
		);

		$this->load->view('view_dapur', $data);
	}

	public function tambah()
	{
		$this->load->view('view_form_dapur');
	}

	public function simpan()
	{
		$this->load->model('Dapur_model');

		$nama_benda = $this->input->post('nama_benda'); // gelas
		$harga = $this->input->post('harga'); // 2000

		$data = array(
			'nama' => $nama_benda, // gelas
			'harga' => $harga, // 2000
		);

		$proses_simpan = $this->Dapur_model->proses_simpan($data);

		if ($proses_simpan == false) {
			$this->load->view('view_form_gagal');
		} else {
			redirect('form/index');
		}
	}

	public function edit($id)
	{
		$this->load->model('Dapur_model');
		$data['dapur'] = $this->Dapur_model->ambil_data_berdasarkan_id($id);
		$this->load->view('view_form_edit_dapur', $data);
	}

	public function update()
	{
		// buat fungsi update
	}

	public function delete()
	{
		// buat fungsi delete
	}
}
