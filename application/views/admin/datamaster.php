<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right align-item-center mt-2">
                            <div class="pull-right">
                                <button type="button" data-toggle="modal" data-target="#tambahCSV" class="btn btn-info px-4 align-self-center report-btn" aria-expanded="false">Import CSV <i class="fa fa-upload"></i></button>
                            </div>
                        </div>

                        <h4 class="mt-0 header-title">Data Master</h4>
                        <p class="text-muted mb-4 font-13">Tingkat Kesejahteraan Masyarakat.</p>
                        <?= $this->session->flashdata('message'); ?>

                        <div class="panel-heading">
                            <div style="color:red;">
                                <?php
                                $error_msg = "";
                                if ($this->session->flashdata('error_msg') && $this->session->flashdata('error_msg') != "") {
                                    $error_msg = $this->session->flashdata('error_msg');
                                }
                                echo $error_msg;
                                ?>
                            </div>
                            <div style="color:green;">
                                <?php
                                $success_msg = "";
                                if ($this->session->flashdata('success_msg') && $this->session->flashdata('success_msg') != "") {
                                    $success_msg = $this->session->flashdata('success_msg');
                                }
                                echo $success_msg;
                                ?>
                            </div>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>X1</th>
                                    <th>X2</th>
                                    <th>X3</th>
                                    <th>X4</th>
                                    <th>X5</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($masyarakat as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['usia']; ?></td>
                                        <td><?= $row['jenis_kelamin']; ?></td>
                                        <td><?= $row['pekerjaan']; ?></td>
                                        <td><?= $row['x1']; ?></td>
                                        <td><?= $row['x2']; ?></td>
                                        <td><?= $row['x3']; ?></td>
                                        <td><?= $row['x4']; ?></td>
                                        <td><?= $row['x5']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahCSV" enctype="multipart/form-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
            <div class="modal-dialog" role="document">
                <!-- Modal content -->
                <form method="POST" action="<?= base_url('admin/DataMaster/import_csv') ?>" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Import File CSV</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="file" name="file" style="display:inline-block;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info waves-effect waves-light" type="submit"><span>Tambah</span><i class="fas fa-plus ml-3"></i></button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light" data-dismiss="modal"><span>Tutup</span><i class="far fa-window-close ml-3"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        <?= $footer; ?>
    </footer>
</div>
<!-- end page content -->


</div>
<!--end page-wrapper-inner -->
</div>
<!-- end page-wrapper -->