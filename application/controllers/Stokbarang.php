<?php
class Stokbarang extends CI_Controller
{
	public function panggil_barang()
	{
		$this->load->model('model_data');
		$data['pelanggan'] = $this->model_data->baca_data();
		$this->load->view('tampil_barang', $data);
	}
	public function simpan()
	{
		$kode = $this->input->post('xkode');
		$nmpelanggan = $this->input->post('xnama');
		$alamatpelanggan = $this->input->post('xalamat');
		$nohp = $this->input->post('xnohp');
		$kotapelanggan = $this->input->post('xkota');


		$data = array(
			'kode'		 => $kode,
			'nama_plggn' => $nmpelanggan,
			'alamat'		 => $alamatpelanggan,
			'no_telp'		 => $nohp,
			'kota'		 => $kotapelanggan,

		);
		$this->load->model('model_data');
		$this->model_data->tambah_data($data, 'pelanggan');
		redirect('stokbarang/panggil_barang');
	}
	public function hapus($kode)
	{
		$kunci = array('kode' => $kode);
		$this->load->model('model_data');
		$this->model_data->hapus_data($kunci, 'pelanggan');
		redirect('stokbarang/panggil_barang');
	}
	public function edit($kode)
	{
		$kunci = array('kode' => $kode);
		$this->load->model('model_data');
		$data['barangku'] = $this->model_data->edit_data($kunci, 'pelanggan')->result();
		$this->load->view('formUpdate', $data);
	}
	public function update()
	{
		$kode = $this->input->post('xkode');
		$nmpelanggan = $this->input->post('xnama');
		$alamatpelanggan = $this->input->post('xalamat');
		$nohp = $this->input->post('xnohp');
		$kotapelanggan = $this->input->post('xkota');


		$data = array(
			'kode'		 => $kode,
			'nama_plggn' => $nmpelanggan,
			'alamat'		 => $alamatpelanggan,
			'no_telp'		 => $nohp,
			'kota'		 => $kotapelanggan,
		);
		$kunci = array('kode' => $kode);
		$this->load->model('model_data');
		$this->model_data->ubah_data($kunci, $data, 'pelanggan');
		redirect('stokbarang/panggil_barang');
	}
}
