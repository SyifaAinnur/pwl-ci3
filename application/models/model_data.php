<?php
class Model_data extends CI_Model
{
	public function baca_data()
	{
		return $this->db->get('pelanggan')->result_array();
	}
	public function tambah_data($tabel, $data)
	{
		$this->db->insert($data, $tabel);
	}
	public function hapus_data($data, $tabel)
	{
		$this->db->where($data);
		$this->db->delete($tabel);
	}
	public function edit_data($data, $tabel)
	{
		return $this->db->get_where($tabel, $data);
	}
	public function ubah_data($kunci, $data, $tabel)
	{
		$this->db->where($kunci);
		$this->db->update($tabel, $data);
	}
}
