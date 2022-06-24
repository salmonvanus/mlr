<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right align-item-center mt-2">
                            <div class="pull-right">
                                <button type="button" data-toggle="modal" data-target="#tambahData" class="btn btn-info px-4 align-self-center report-btn" aria-expanded="false">Tambah Data <i class="fa fa-plus"></i></button>
                            </div>
                        </div>

                        <h4 class="mt-0 header-title">Data Master Masyarakat</h4>
                        <p class="text-muted mb-4 font-13">Tingkat Kesejahteraan Masyarakat.</p>
                        <?= $this->session->flashdata('message'); ?>

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
                        <p class="text-muted mb-0 font-15">Keterangan.</p>
                        <p class="text-muted mb-0 font-13">X1 = Pendapatan</p>
                        <p class="text-muted mb-0 font-13">X2 = Pendidikan</p>
                        <p class="text-muted mb-0 font-13">X3 = Pekerjaan</p>
                        <p class="text-muted mb-0 font-13">X4 = Jumlah Anggota Keluarga</p>
                        <p class="text-muted mb-0 font-13">X5 = Aset dan Tabungan</p>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahData" enctype="multipart/form-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
            <div class="modal-dialog" role="document">
                <?php echo form_open_multipart('admin/Masyarakat/tambah_data'); ?>
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Masukkan Data Yang Akan di Hitung</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <!-- <label for="name">Usia</label> -->
                            <input type="text" name="add_usia" placeholder="Usia" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <!-- <label for="name">Jenis Kelamin</label> -->
                            <div class="input-group mb-3">
                                <input type="hidden" name="add_jenis_kelamin">
                                <select class="custom-select" id="inputGroupSelect01" name="add_jenis_kelamin">
                                    <option selected disabled value="">Pilih Jenis Kelamin...</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="name">Pekerjaan</label> -->
                            <input type="text" name="add_pekerjaan" placeholder="Pekerjaan" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" name="add_x1" placeholder="Input nilai x1" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>

                        <div class="form-group">
                            <input type="text" name="add_x2" placeholder="Input nilai x2" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>

                        <div class="form-group">
                            <input type="text" name="add_x3" placeholder="Input nilai x3" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>

                        <div class="form-group">
                            <input type="text" name="add_x4" placeholder="Input nilai x4" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>

                        <div class="form-group">
                            <input type="text" name="add_x5" placeholder="Input nilai x5" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info waves-effect waves-light" type="submit"><span>Tambah</span><i class="fas fa-plus ml-3"></i></button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal"><span>Tutup</span><i class="far fa-window-close ml-3"></i></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
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