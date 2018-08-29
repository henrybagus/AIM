<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vw_tr_harga_stock extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this
            ->db
            ->get('VW_TR_HARGA_STOCK');
        if ($query->num_rows() > 0) {
            $arr_res = $query->result_array();
            return $arr_res;
        }
        return false;
    }
}