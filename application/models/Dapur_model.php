<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dapur_model extends CI_Model
{

	public function ambil_data()
	{
		return $this->db->get('tbl_dapur');
	}

	public function ambil_data_berdasarkan_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_dapur')->row_array();
	}

	public function proses_simpan($data)
	{
		return $this->db->insert('tbl_dapur', $data);
	}

	public function proses_update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_dapur', $data);
	}
}
                        
/* End of file Dapur_model.php */
