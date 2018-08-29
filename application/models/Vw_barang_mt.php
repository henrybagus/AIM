<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vw_barang_mt extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this
            ->db
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }

    public function getAll_Aktif()
    {
        $query = $this
            ->db
            ->where('F_AKTIF', '1')
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }

    public function getAllBrg()
    {
        $query = $this
            ->db
            ->where('F_AKTIF', '1')
            ->order_by('V_NM_MERK_SATUAN', 'ASC')
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result();
            return $arr_res;
        }
        return false;
    }

    public function get($kode)
    {
        $query = $this
            ->db
            ->where('V_KODE_BARANG', $kode)
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            return $arr_res;
        }
        return false;
    }

    public function getAll_Aktif2()
    {
        $query = $this
            ->db
            ->where('F_AKTIF', '1')
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result();
            return $arr_res;
        }
        return false;
    }

    public function getNamaBarang($idBarang)
    {
        $query = $this
            ->db
            ->select('V_NM_MERK_SATUAN')
            ->where('V_KODE_BARANG', $idBarang)
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            return $arr_res;
        }
        return false;
    }
	
	public function getKodNaBarang()
    {
        $query = $this
            ->db
            ->select('V_KODE_BARANG, V_NAMA_BARANG')
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result();
            return $arr_res;
        }
        return false;
    }

    public function getBarangKonversiJadi($kodeBarangBahan){
        if($kodeBarangBahan=="0"){
            $kodeBarangBahan='';
        }
        $query = $this
            ->db
            ->where_not_in('V_KODE_BARANG',$kodeBarangBahan)
            ->order_by('V_NM_MERK_SATUAN', 'ASC')
            ->get('VW_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result();
            return $arr_res;
        }
        return false;
    }

    public function distKategori()
    {
        $query = $this	->db->query("SELECT DISTINCT `N_KODE_KATEGORI`, V_KATEGORI FROM `VW_BARANG_MT` ORDER BY `N_KODE_KATEGORI` ASC");
        //var_dump($this->db->last_query());
        if ($query->num_rows() > 0) {
            $arr_res = $query->result();
            return $arr_res;
        }
        return false;
    }
}