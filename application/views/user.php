<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <?php echo $this->session->flashdata('msg') ?>
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex align-items-start py-2">
                        <h4 class="card-title">Data User</h4>
                        <?php if ($this->session->userdata('level') == 2) { ?>
                            <div class="ml-auto">
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary pull-right"><i class="fas fa-plus"></i> Tambah User</button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <?php if ($this->session->userdata('level') == 2) { ?>
                                        <th>Aksi</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hasil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlentities($data->jenis_kelamin, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <?php if ($this->session->userdata('level') == 2) { ?>
                                            <td>
                                                <a href="<?php echo base_url() ?>page/hapus_user/<?php echo $data->id ?>" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>page/tambah_user" method="post">
                    <div class="form-group mb-4">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group mb-4">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="exampleFormControlSelect1">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Laki-Laki">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group mb-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlSelect1">Level</label>
                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                            <option value="3">Pegawai</option>
                            <option value="2">HRD</option>
                            <option value="1">Manajer</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>