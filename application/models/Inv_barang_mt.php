<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inv_barang_mt extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this
            ->db
            ->get('INV_BARANG_MT');
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

    public function get($kode)
    {
        $query = $this
            ->db
            ->where('V_KODE_BARANG', $kode)
            ->get('INV_BARANG_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            return $arr_res;
        }
        return false;
    }

    public function tambah($data)
    {
        return $this->db->insert('INV_BARANG_MT', $data);
    }

    public function ubah($kode, $data)
    {
        return $this->db
            ->where('V_KODE_BARANG', $kode)
            ->update('INV_BARANG_MT', $data);
    }

    public function hapus($kode)
    {
        return $this
            ->db
            ->where('V_KODE_BARANG', $kode)
            ->delete('INV_BARANG_MT');
    }

    public function generate_id()
    {
        $sql = "SELECT `FNC_CR_KODE_BARANG_MT` () AS ID_BARANG";
        $q = $this->db->query($sql);
        $arr = $q->row_array(0);
        return $arr['ID_BARANG'];
    }
}