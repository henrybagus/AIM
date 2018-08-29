<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class C_master extends MY_Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
        $this->session_checking->cek_user();
        $this->load->model('inv_kategori_mt');
        $this->load->model('inv_merk_mt');
        $this->load->model('inv_barang_mt');
        $this->load->model('inv_satuan_mt');
        $this->load->model('vw_barang_mt');
    }
     /*Master Jual Start*/

    /*Master kategori Start*/
    public function master_kategori()
    {
        $data['kategor'] = $this->inv_kategori_mt->getAll();
        $data['nama_kategori'] = array(
            'name' => 'nama_kategori',
            'id' => 'nama_kategori',
            'type' => 'text',
            'class' => 'form-control',
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Kategori harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('nama_kategori')
        );
		
        $this->load->view('Template/V_header2');
        $this->load->view('Template/V_sidebar');
        $this->load->view('Master/V_masterKategori', $data);
        $this->load->view('Template/V_footer3');
    }
	
    public function simpan_kategori()
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_KATEGORI' => $this->input->post('nama_kategori'),
            'F_AKTIF' => $this->input->post('status'),
            'T_INSERT' => $today,
            'T_UPDATE' => "0000-00-00 00:00:00",
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $create = $this->inv_kategori_mt->tambah($data);
        if ($create) {
            $this->showMessage(true, "Data kategori berhasil disimpan");
        } else {
            $this->showMessage(false, "Data kategori gagal disimpan");
        }
        redirect(site_url('master_kategori'));
    }
	
    public function ubah_kategori($kode)
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_KATEGORI' => $this->input->post('nama_kategori'),
            'F_AKTIF' => $this->input->post('status'),
            'T_UPDATE' => $today,
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $update = $this->inv_kategori_mt->ubah($kode, $data);
        if ($update) {
            $this->showMessage(true, "Data kategori berhasil diubah");
        } else {
            $this->showMessage(false, "Data kategori gagal diubah");
        }
        redirect(site_url('master_kategori'));
    }
	
    public function hapus_kategori($kode)
    {
        $delete = $this->inv_kategori_mt->hapus($kode);
        if ($delete) {
            $this->showMessage(true, "Data kategori berhasil dihapus");
        } else {
            $this->showMessage(false, "Data kategori gagal dihapus");
        }
        redirect(site_url('master_kategori'));
    }
    /*Master kategori End*/

    public function master_merk()
    {
        $data['merek'] = $this->inv_merk_mt->getAll();
        $data['nama_merk'] = array(
            'name' => 'nama_merk',
            'id' => 'nama_merk',
            'type' => 'text',
            'class' => 'form-control',
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Nama Merk harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('nama_merk')
        );

        $this->load->view('Template/V_header2');
        $this->load->view('Template/V_sidebar');
        $this->load->view('Master/V_masterMerk', $data);
        $this->load->view('Template/V_footer3');
    }
	
    public function simpan_merk()
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_MERK' => $this->input->post('nama_merk'),
            'F_AKTIF' => $this->input->post('status'),
            'T_INSERT' => $today,
            'T_UPDATE' => "0000-00-00 00:00:00",
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $create = $this->inv_merk_mt->tambah($data);
        if ($create) {
            $this->showMessage(true, "Data merk berhasil disimpan");
        } else {
            $this->showMessage(false, "Data merk gagal disimpan");
        }
        redirect(site_url('master_merk'));
    }
	
    public function ubah_merk($kode)
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_MERK' => $this->input->post('nama_merk'),
            'F_AKTIF' => $this->input->post('status'),
            'T_UPDATE' => $today,
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $update = $this->inv_merk_mt->ubah($kode, $data);
        if ($update) {
            $this->showMessage(true, "Data merk berhasil diubah");
        } else {
            $this->showMessage(false, "Data merk gagal diubah");
        }
        redirect(site_url('master_merk'));
    }
	
    public function hapus_merk($kode)
    {
        $delete = $this->inv_merk_mt->hapus($kode);
        if ($delete) {
            $this->showMessage(true, "Data merk berhasil dihapus");
        } else {
            $this->showMessage(false, "Data merk gagal dihapus");
        }
        redirect(site_url('master_merk'));
    }
	
    public function master_barang()
    {
        $data['barangAll'] = $this->vw_barang_mt->getAll();
        $data['merkByStat'] = $this->inv_merk_mt->getAllbyStat();
        $data['katego'] = $this->inv_kategori_mt->getAll();
        $data['kategorByStat'] = $this->inv_kategori_mt->getAllbyStat();
        $data['satuanBarang'] = $this->inv_satuan_mt->getAll();
        $data['satuanBarangByStat'] = $this->inv_satuan_mt->getAllbyStat();
        $data['nama_barang'] = array(
            'name' => 'nama_barang',
            'id' => 'nama_barang',
            'type' => 'text',
            'class' => 'form-control',
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Nama Barang harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('nama_barang')
        );
        $data['harga_terakhir_barang'] = array(
            'name' => 'harga_terakhir_barang',
            'id' => 'harga_terakhir_barang',
            'type' => 'text',
            'class' => 'form-control',
            'onkeyup' => "money_encode_js(this);",
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Harga Terakhir Barang harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('harga_terakhir_barang')
        );
        $data['jual_barang'] = array(
            'name' => 'jual_barang',
            'id' => 'jual_barang',
            'type' => 'text',
            'style' => 'text-align: right',
            'class' => 'form-control',
            'onkeyup' => "money_encode_js(this);",
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Harga Jual Barang harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('jual_barang')
        );
        $data['stok_awal_barang'] = array(
            'name' => 'stok_awal_barang',
            'id' => 'stok_awal_barang',
            'type' => 'text',
            'style' => 'text-align: right',
            'class' => 'form-control',
            'onkeyup' => "money_encode_js(this);",
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Stok Awal Barang harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('stok_awal_barang')
        );
        $data['stok_min_barang'] = array(
            'name' => 'stok_min_barang',
            'id' => 'stok_min_barang',
            'type' => 'text',
            'style' => 'text-align: right',
            'class' => 'form-control',
            'onkeyup' => "money_encode_js(this);",
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Stok Minimum Barang harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('stok_min_barang')
        );
		
        $this->load->view('Template/V_header2');
        $this->load->view('Template/V_sidebar');
        $this->load->view('Master/V_masterBarang', $data);
        $this->load->view('Template/V_footer3');
    }

    public function simpan_barang()
    {
        $id_barang = $this->inv_barang_mt->generate_id();
        $inputJual = str_replace(".", "", $this->input->post('jual_barang'));
        $inputStokMin = str_replace(".", "", $this->input->post('stok_min_barang'));
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_KODE_BARANG' => $id_barang,
            'N_KODE_SATUAN' => $this->input->post('satuan_dropdown'),
            'N_KODE_KATEGORI' => $this->input->post('kategori_dropdown'),
            'N_KODE_MERK' => $this->input->post('merk_dropdown'),
            'V_NAMA_BARANG' => $this->input->post('nama_barang'),
            'F_AKTIF' => $this->input->post('status'),
            'T_INSERT' => $today,
            'T_UPDATE' => "0000-00-00 00:00:00",
            'V_INUPBY' => $this->session->userdata('username')
        );

        $create = $this->inv_barang_mt->tambah($data);
        if ($create) {
            $this->showMessage(true, "Data barang berhasil disimpan");

        } else {
            $this->showMessage(false, "Data barang gagal disimpan");
        }
        redirect(site_url('master_barang'));

    }

    public function ubah_barang($kode)
    {
        $inputJual = str_replace(".", "", $this->input->post('jual_barang'));
        $inputStokMin = str_replace(".", "", $this->input->post('stok_min_barang'));
        $today = date('Y-m-d H:i:s');

        $data = array(
            'N_KODE_SATUAN' => $this->input->post('satuan_dropdown'),
            'N_KODE_KATEGORI' => $this->input->post('kategori_dropdown'),
            'N_KODE_MERK' => $this->input->post('merk_dropdown'),
            'V_NAMA_BARANG' => $this->input->post('nama_barang'),
            'N_HARGA_JUAL' => $inputJual,
            'N_STOK_MIN' => $inputStokMin,
//            'N_STOK_MAX' => $this->input->post('stok_awal_barang'),
            'F_AKTIF' => $this->input->post('status'),
            'T_UPDATE' => $today,
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $update = $this->inv_barang_mt->ubah($kode, $data);
        if ($update) {
            $this->showMessage(true, "Data barang berhasil diubah");
        } else {
            $this->showMessage(false, "Data barang gagal diubah");

        }
        redirect(site_url('master_barang'));
    }

    public function hapus_barang($kode)
    {
        $delete = $this->inv_barang_mt->hapus($kode);
        if ($delete) {
            $this->showMessage(true, "Data barang berhasil dihapus");

        } else {
            $this->showMessage(false, "Data barang gagal dihapus");

        }
        redirect(site_url('master_barang'));
    }

    /*Master Satuan Start*/
    public function master_satuan()
    {
        $data['satuans'] = $this->inv_satuan_mt->getAll();
        $data['nama_satuan'] = array(
            'name' => 'nama_satuan',
            'id' => 'nama_satuan',
            'type' => 'text',
            'class' => 'form-control',
            'required' => "",
            'oninvalid' => "this.setCustomValidity('Nama harus diisi')",
            'oninput' => "setCustomValidity('')",
            'value' => $this->form_validation->set_value('nama_satuan')
        );

        $this->load->view('Template/V_header2');
        $this->load->view('Template/V_sidebar');
        $this->load->view('Master/V_masterSatuan', $data);
        $this->load->view('Template/V_footer3');

    }

    public function simpan_satuan()
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_SATUAN' => $this->input->post('nama_satuan'),
            'F_AKTIF' => $this->input->post('status'),
            'T_INSERT' => $today,
            'T_UPDATE' => "0000-00-00 00:00:00",
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $create = $this->inv_satuan_mt->tambah($data);
        if ($create) {
            $this->showMessage(true, "Data satuan berhasil disimpan");
        } else {
            $this->showMessage(false, "Data satuan gagal disimpan");
        }
        redirect(site_url('master_satuan'));
    }

    public function ubah_satuan($kode)
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'V_SATUAN' => $this->input->post('nama_satuan'),
            'F_AKTIF' => $this->input->post('status'),
            'T_UPDATE' => $today,
            'V_INUPBY' => $this->session->userdata('username'),
        );
        $update = $this->inv_satuan_mt->ubah($kode, $data);
        if ($update) {
            $this->showMessage(true, "Data satuan berhasil diubah");
        } else {
            $this->showMessage(false, "Data satuan gagal diubah");
        }
        redirect(site_url('master_satuan'));
    }

    public function hapus_satuan($kode)
    {
        $delete = $this->inv_satuan_mt->hapus($kode);
        if ($delete) {
            $this->showMessage(true, "Data satuan berhasil dihapus");

        } else {
            $this->showMessage(false, "Data satuan gagal dihapus");

        }
        redirect(site_url('master_satuan'));
    }
    /*Master Satuan End*/
}