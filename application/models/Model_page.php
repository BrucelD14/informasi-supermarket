<?php
class Model_page extends CI_Model
{
	function data_suply()
	{
		$this->db->select('*');
      $this->db->from('tbl_suply');
      $this->db->join('tbl_barang','tbl_suply.id_barang = tbl_barang.id_barang');      
			$query = $this->db->get();
      return $query;
	}
	function data_transaksi()
	{
		$this->db->select('*');
      $this->db->from('tbl_transaksi');
      $this->db->join('tbl_barang','tbl_transaksi.id_barang = tbl_barang.id_barang');      
			$query = $this->db->get();
      return $query;
	}

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function update($where,$table){		
		return $this->db->get_where($where, $table);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}