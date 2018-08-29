<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tr_harga_stock extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this
            ->db
            ->get('TR_HARGA_STOCK');
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
            ->where('F_AKTIF','1')
            ->get('INV_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }

    public function get($urut,$kode)
    {
        $query = $this
            ->db
            ->where('N_URUT', $urut)
            ->where('V_KODE_BARANG', $kode)
            ->get('TR_HARGA_STOCK');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            return $arr_res;
        }
        return false;
    }

    public function getUrutMaksimum($kode_barang){
        $query = $this
            ->db
            ->select_max('N_URUT')
            ->where('V_KODE_BARANG', $kode_barang)
            ->get('TR_HARGA_STOCK');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            if($arr_res['N_URUT']==null)
                return 0;
            return $arr_res['N_URUT'];
        }
        return false;
    }

    public function tambah($data)
    {
        return $this->db->insert('TR_HARGA_STOCK', $data);
    }

    public function hapus($urutan,$kode)
    {
        return $this
            ->db
            ->where('N_URUT', $urutan)
            ->where('V_KODE_BARANG', $kode)
            ->delete('TR_HARGA_STOCK');
    }
}