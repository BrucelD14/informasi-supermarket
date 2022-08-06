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
                <?php if($this->session->userdata('level')==3){ ?>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data Barang</h4>
                                <div class="mt-4 activity">
                                    <form action="<?php echo base_url() ?>page/tambah_barang" method="POST">
                                        <div class="form-group mb-4">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" placeholder="Harga">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Stok</h4>
                                <div class="mt-4 activity">
                                    <form action="<?php echo base_url() ?>page/tambah_stok" method="POST">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1">Jenis Barang</label>
                                            <select class="form-control" name="id" id="exampleFormControlSelect1">
                                                <?php
                                                    foreach($hasil as $data){
                                                ?>
                                                    <option value="<?php echo $data->id_barang;?>"><?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8');?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="stok" placeholder="Stok Masuk">
                                        </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <div class="col-lg-12">
                        <div class="card w-100">
                            <div class="card-body">
                                    <h4 class="card-title">Data Barang</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <?php if($this->session->userdata('level')==3){ ?>
                                                    <th>Aksi</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach($hasil as $data){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8');?></td>
                                                <td><?php echo htmlentities($data->harga_barang, ENT_QUOTES, 'UTF-8');?></td>
                                                <td><?php echo htmlentities($data->stok_barang, ENT_QUOTES, 'UTF-8');?></td>
                                                <?php if($this->session->userdata('level')==3){ ?>
                                                    <td>
                                                        <button type="button" data-toggle="modal" data-target="#exampleModal<?php echo $data->id_barang?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></button>
                                                        <a href="<?php echo base_url() ?>page/hapus/<?php echo $data->id_barang ?>" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal<?php echo $data->id_barang?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="<?php echo base_url() ?>page/update_barang" method="POST">
                                                                <input type="hidden" value="<?php echo $data->id_barang?>" name="id">
                                                                <div class="form-group mb-4">
                                                                <label>Nama Barang</label>
                                                                <input type="text" name="nama" class="form-control" value="<?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8');?>" placeholder="Nama">
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <label>Harga</label>
                                                                    <input type="number" name="harga" class="form-control" value="<?php echo htmlentities($data->harga_barang, ENT_QUOTES, 'UTF-8');?>" placeholder="Harga">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        </div>
                                                    </div>
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