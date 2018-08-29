<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inv_satuan_mt extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this
            ->db
            ->get('INV_SATUAN_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }

    public function getAllbyStat()
    {
        $query = $this
            ->db
            ->where('F_AKTIF=1')
            ->get('INV_SATUAN_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }


    public function tambah($data)
    {
        return $this->db->insert('INV_SATUAN_MT', $data);

    }

    public function get($kode)
    {
        $query = $this
            ->db
            ->where('N_KODE_SATUAN', $kode)
            ->get('INV_SATUAN_MT');
        if ($query->num_rows() > 0) {
            $arr_res = $query->row_array();
            return $arr_res;
        }
        return false;
    }

    public function ubah($kode, $data)
    {
        return $this->db
            ->where('N_KODE_SATUAN', $kode)
            ->update('INV_SATUAN_MT', $data);
    }

    public function hapus($kode)
    {
        return $this
            ->db
            ->where('N_KODE_SATUAN', $kode)
            ->delete('INV_SATUAN_MT');
    }
}    