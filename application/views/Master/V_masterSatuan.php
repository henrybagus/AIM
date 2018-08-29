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
                    <span>Master Satuan</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
<!--        <h1 class="page-title"> Managed Master Satuan-->
            <!-- <small>managed datatable samples</small>-->
<!--        </h1>-->
        <!-- END PAGE TITLE-->
<!--        <div class="m-heading-1 border-green m-bordered">-->
<!--            <h3>Master Satuan</h3>-->
<!--            <p>Master yang digunakan untuk mengatur satuan</p>-->
<!--        </div>-->
        <?php echo $this->session->flashdata('message');
        ?>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Master Satuan</span>
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
                                        <h4 class="modal-title">Tambah Satuan</h4>
                                    </div>
                                    <?php echo form_open('simpan_satuan', 'class="form-horizontal" name="create-form"'); ?>
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nama Satuan</label>
                                                <div class="col-md-6">
                                                    <?php echo form_input($nama_satuan);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status" class="control-label col-md-3">Status</label>
                                                <div class="col-md-6">
                                                    <select id="status" name="status"
                                                            class="form-control select2 col-md-3">
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Tidak Aktif</option>
                                                    </select>
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

                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="tableMasterSatuan" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="all" width="5%"> No</th>
                                <th class="all"> Nama Satuan</th>
                                <th class="all"> Status</th>
                                <th class="all" width="5%"> Ubah</th>
                                <th class="all" width="5%"> Hapus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            if ($satuans) {
                                foreach ($satuans as $satuan) {
                                    $kode = $satuan['N_KODE_SATUAN'];
                                    $nama = $satuan['V_SATUAN'];
                                    $status = $satuan['F_AKTIF'];
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no ?>
                                        </td>
                                        <td>
                                            <?php echo $nama ?>
                                        </td>
                                        <td>
                                            <?php if ($status == 1) {
                                                echo "Aktif";
                                            } else {
                                                echo "Tidak Aktif";
                                            }
                                            ?>
                                        </td>
                                        <td align="center">
                                            <a class="btn green btn-outline sbold" data-toggle="modal"
                                               href="#edit-<?php echo $no; ?>"><i class="fa fa-pencil"></i></a>
                                            <!--Modal Edit-->
                                            <div class="modal fade" id="edit-<?php echo $no; ?>" tabindex="-1"
                                                 role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true"></button>
                                                            <h4 class="modal-title">Ubah Satuan</h4>
                                                        </div>
                                                        <?php echo form_open('ubah_satuan/' . $kode, 'class="form-horizontal" name="create-form"'); ?>
                                                        <div class="modal-body">
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Nama
                                                                        Satuan</label>
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="nama_satuan"
                                                                               class="form-control" required
                                                                               oninvalid="this.setCustomValidity('Nama harus diisi')"
                                                                               oninput="setCustomValidity('')"
                                                                               value="<?php echo $nama; ?>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status" class="control-label col-md-3">Status</label>
                                                                    <div class="col-md-6">
                                                                        <select id="status" name="status"
                                                                                class="form-control select2 col-md-3">
                                                                            <?php
                                                                            if ($status == 0) {
                                                                                $status1 = '';
                                                                                $status2 = 'selected';
                                                                            } else {
                                                                                $status1 = 'selected';
                                                                                $status2 = '';
                                                                            }
                                                                            ?>
                                                                            <option <?php echo $status1 ?> value="1">
                                                                                Aktif
                                                                            </option>
                                                                            <option <?php echo $status2 ?> value="0">
                                                                                Tidak Aktif
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark btn-outline"
                                                                    data-dismiss="modal">Batal
                                                            </button>
                                                            <button type="submit" class="btn green">Simpan</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                                        </td>
                                        <td align="center">
                                            <?php
                                            echo anchor('hapus_satuan/' . $kode, '<i class="fa fa-times"></i> ', array('onClick' => "return confirm('Hapus satuan " . $nama . "?')", 'class' => "btn red btn-outline sbold"));
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

        var table = $('#tableMasterSatuan');
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
                        columns: [0,1,2],
                    },
                    title:'SAI MASTER SATUAN',
                    className: 'btn default'
                }
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {

                }
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