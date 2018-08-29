<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_stock extends MY_Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
        $this->session_checking->cek_user();
        $this->load->model('tr_harga_stock');
        $this->load->model('vw_tr_harga_stock');
        $this->load->model('vw_barang_mt');
    }

    /*Master kategori Start*/
    public function penambahan_stock()
    {
        $data['barangAll'] = $this->vw_barang_mt->getAll();
        $data['stocks'] = $this->vw_tr_harga_stock->getAll();
        $this->load->view('Template/V_header2');
        $this->load->view('Template/V_sidebar');
        $this->load->view('Stock/V_penambahan_stock',$data);
        $this->load->view('Template/V_footer3');
    }

    public function  save_penambahan_stock(){
        $data = $this->input->post();
        $today = date('Y-m-d H:i:s');
        $urut = $this->tr_harga_stock->getUrutMaksimum($data['kode_barang'])+1;
        $dibayar = (int)str_replace(".", "", $data['harga']);
        $data = [
          'N_URUT'=>$urut,
            'V_KODE_BARANG'=>$data['kode_barang'],
            'STOCK_AWAL' => $data['stock'],
            'HARGA_BELI' => $dibayar,
            'T_INSERT' => $today,
            'T_UPDATE' => "0000-00-00 00:00:00",
            'V_INUPBY' => $this->session->userdata('username'),

        ];
        $create = $this->tr_harga_stock->tambah($data);
        if ($create) {
            $this->showMessage(true, "Data Penambahan Stock berhasil ditambahkan");
        } else {
            $this->showMessage(false, "Data Penambahan Stock gagal ditambahkan");
        }
        redirect(site_url('penambahan_stock'));
    }

    public function delete_penambahan_stock($urutan,$kode_barang){
        $delete = $this->tr_harga_stock->hapus($urutan,$kode_barang);
        if ($delete) {
            $this->showMessage(true, "Data Penambahan Stock berhasil dihapus");
        } else {
            $this->showMessage(false, "Data Penambahan Stock gagal dihapus");
        }
        redirect(site_url('penambahan_stock'));
    }


}