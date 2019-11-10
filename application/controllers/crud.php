<?php 
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['mahasiswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
		function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama_mahasiswa = $this->input->post('nama_mahasiswa');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama_mahasiswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);

		$this->m_data->input_data($data,'mahasiswa');
		redirect('crud/index');
	}
	function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_data->hapus_data($where,'mahasiswa');
		redirect('crud/index');
	}

	function edit($nim){
		$where = array('nim' => $nim);
		$data['mahasiswa'] = $this->m_data->edit_data($where,'mahasiswa')->result();
		$this->load->view('v_edit',$data);
	}
function update(){
		
		$nama_mahasiswa = $this->input->post('nama_mahasiswa');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
		
			'nama_mahasiswa' => $nama_mahasiswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);

		$where = array(
		'nim' => $nim
	);
 
	$this->m_data->update_data($where,$data,'mahasiswa');
	redirect('crud/index');
}
}