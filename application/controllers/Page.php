<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('auth'));
		}
	}

	public function transaksi()
	{
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
    $data['title'] = 'Transaksi';
    $data['hasil']= $this->Model_page->tampil('tbl_barang')->result();
    $this->load->view('include/header', $data);
		$this->load->view('transaksi');
    $this->load->view('include/footer');
	}

  public function checkout(){
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
		$id_barang = $_POST['id'];
		$stok = $_POST['stok'];
    $waktu = $_POST['waktu'];
		$data = array(
			'id_barang'=>$id_barang,
			'stok'=>$stok,
      'waktu_transaksi'=>$waktu
			);
		$this->Model_page->tambah('tbl_transaksi',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Melakukan Transaksi!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/transaksi'));
	}


  public function barang()
	{
		if(($this->session->userdata('level')!= "1") and ($this->session->userdata('level')!= "3")){
			redirect(base_url('page/user'));
		}
    $data['hasil']= $this->Model_page->tampil('tbl_barang')->result();
    $data['title'] = 'Manajemen barang';
    $this->load->view('include/header', $data);
		$this->load->view('barang');
    $this->load->view('include/footer');
	}

  public function tambah_barang(){
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$data = array(
			'nama_barang'=>$nama,
			'harga_barang'=>$harga,
      'stok_barang'=>0
			);
		$this->Model_page->tambah('tbl_barang',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan data barang!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/barang'));
	}

  public function tambah_stok(){
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
		$id_barang = $_POST['id'];
		$stok = $_POST['stok'];
    $waktu = date("Y-m-d");
		$data = array(
			'id_barang'=>$id_barang,
			'stok'=>$stok,
      'waktu_suply'=>$waktu
			);
		$this->Model_page->tambah('tbl_suply',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan stok barang!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/barang'));
	}

	public function update_barang()
	{
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
		$id = $_POST['id'];
		$where = array('id_barang' => $id);
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$data = array(
			'nama_barang'=>$nama,
			'harga_barang'=>$harga,
		);
		$this->db->update('tbl_barang',$data,$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Merubah data barang!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/barang'));
	}
	
	function hapus($id)
	{
		if($this->session->userdata('level')!= "3"){
			redirect(base_url('page/barang'));
		}
		$where = array('id_barang'=>$id);
		$this->Model_page->hapus('tbl_barang',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menghapus data barang!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/barang'));
	}

  public function laporan_suply()
	{
		if(($this->session->userdata('level')!= "1") and ($this->session->userdata('level')!= "3")){
			redirect(base_url('page/user'));
		}
    $data['title'] = 'Laporan Suply';
		$data['hasil']= $this->Model_page->data_suply()->result();
    $this->load->view('include/header', $data);
		$this->load->view('laporan_suply');
    $this->load->view('include/footer');
	}

  public function laporan_transaksi()
	{
		if(($this->session->userdata('level')!= "1") and ($this->session->userdata('level')!= "3")){
			redirect(base_url('page/user'));
		}
    $data['title'] = 'Laporan Transaksi';
		$data['hasil']= $this->Model_page->data_transaksi()->result();
    $this->load->view('include/header', $data);
		$this->load->view('laporan_transaksi');
    $this->load->view('include/footer');
	}

  public function user()
	{
		if(($this->session->userdata('level')!= "1") and ($this->session->userdata('level')!= "2")){
			redirect(base_url('page/barang'));
		}
    $data['title'] = 'Manajemen User';
    $data['hasil']= $this->Model_page->tampil('tbl_users')->result();
    $this->load->view('include/header', $data);
		$this->load->view('user');
    $this->load->view('include/footer');
	}

	public function tambah_user()
	{
		if($this->session->userdata('level')!= "2"){
			redirect(base_url('page/barang'));
		}
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
		$username = $_POST['username'];
    $password = $_POST['password'];
		$level = $_POST['level'];
		$data = array(
			'nama'=>$nama,
			'jenis_kelamin'=>$jk,
			'alamat'=>$alamat,
			'username'=>$username,
      'password'=>md5($password),
			'level'=>$level
			);
		$this->Model_page->tambah('tbl_users',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan user!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/user'));
	}

	function hapus_user($id)
	{
		if($this->session->userdata('level')!= "2"){
			redirect(base_url('page/barang'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_users',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menghapus data user!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/user'));
	}
}
