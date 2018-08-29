<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="#">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Penambahan Stock</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <?php echo $this->session->flashdata('message');
        ?>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Penambahan Stock</span>
                        </div>
                        <div class="tools"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--<button id="a" class="btn sbold green"> Tambah
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    -->
                                    <a class="btn blue btn-outline sbold" data-toggle="modal" href="#tambah">
                                        Tambah </a>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tambah-->
                        <div class="modal fade" id="tambah" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true"></button>
                                        <h4 class="modal-title">Tambah Stock</h4>
                                    </div>
                                    <?php echo form_open('simpan_stock_barang', 'class="form-horizontal" name="create-form"'); ?>
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Nama Barang</label>
                                                <div class="col-md-6">
                                                    <select name="kode_barang" id="merk_dropdown"
                                                            class="form-control select2">
                                                        <?php
                                                        if ($barangAll) {
                                                            foreach ($barangAll as $barang_add) {
                                                                $kode = $barang_add['V_KODE_BARANG'];
                                                                $nama = $barang_add['V_NAMA_BARANG'];
                                                                ?>
                                                                <option value="<?php echo $kode ?>"><?php echo $nama ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Harga Barang</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" style="text-align: right"
                                                           onkeyup="money_encode_js(this);" name="harga"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Jumlah Stock Barang</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" style="text-align: right"
                                                           onkeyup="money_encode_js(this);" name="stock"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal
                                        </button>
                                        <button type="submit" class="btn green">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!--TUTUP Modal Tambah TUTUP-->

                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%"
                               id="tableMasterBarang" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="all" width="5%"> No</th>
                                <th class="all"> Kode Barang</th>
                                <th class="all"> Nama Barang</th>
                                <th class="min-phone-l"> Harga Barang</th>
                                <th class="min-phone-l"> Jumlah Stock Awal</th>
                                <th class="min-phone-l"> Tanggal Input</th>
                                <th class="all" width="5%"> Hapus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            if ($stocks) {
                                foreach ($stocks as $stock) {
                                    $urutan = $stock['N_URUT'];
                                    $kode = $stock['V_KODE_BARANG'];
                                    $nama = $stock['V_NM_MERK_SATUAN'];
                                    $harga = $stock['HARGA_BELI'];
                                    $tgl_input = date('d-m-Y', strtotime($stock['T_INPUT']));
                                    $stockAwal = $stock['STOCK_AWAL'];
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no ?>
                                        </td>
                                        <td>
                                            <?php echo $kode ?>
                                        </td>
                                        <td>
                                            <?php echo $nama?>
                                        </td>
                                        <td class="text-right"><?php echo number_format($harga, 0, ',', '.') ?></td>
                                        <td class="text-right"><?php echo number_format($stockAwal, 0, ',', '.') ?></td>
                                        <td>
                                            <?php echo $tgl_input ?>
                                        </td>
                                        <td align="center">
                                            <?php
                                            echo anchor('hapus_penambahan_stock/' . $urutan . '/' . $kode, '<i class="fa fa-times"></i> ', array('onClick' => "return confirm('Hapus barang " . $nama . "?')", 'class' => "btn red btn-outline sbold"));
                                            ?>

                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div> <!-- END portlet-body-->
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        var table = $('#tableMasterBarang');
        var oTable = table.dataTable({
            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "_MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup buttons extentension: http://datatables.net/extensions/buttons/
            buttons: [
//                {
//                    extend: 'pdf',
//                    exportOptions: {
//                        columns: [0,1,2,7,4,8]
//                    },
//                    className: 'btn default'
//
//
//                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 13, 14, 15, 16, 10]
                    },
                    title: 'SAI MASTER BARANG',
                    className: 'btn default'
                }
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {}
            },

            "order": [
                [0, 'asc']
            ],

            "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": -1,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    });

</script>