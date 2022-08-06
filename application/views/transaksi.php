<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-md-6 col-lg-7">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title">Barang Tersedia</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hasil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlentities($data->harga_barang, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlentities($data->stok_barang, ENT_QUOTES, 'UTF-8'); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Transaksi</h4>
                    <div class="mt-4 activity">
                        <?php echo $this->session->flashdata('msg') ?>
                        <form action="<?php echo base_url() ?>page/checkout" method="POST">
                            <div class="form-group mb-4">
                                <label for="exampleFormControlSelect1">Nama Barang</label>
                                <select class="form-control" name="id" id="exampleFormControlSelect1">
                                    <?php
                                    foreach ($hasil as $data) {
                                    ?>
                                        <option value="<?php echo $data->id_barang; ?>"><?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label>Terjual</label>
                                <input type="number" name="stok" class="form-control" placeholder="Stok Keluar">
                            </div>
                            <div class="form-group mb-4">
                                <label>Tanggal</label>
                                <input type="date" name="waktu" class="form-control" value="<?php echo date("Y-m-d"); ?>" placeholder="col-md-12">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Checkout</button>
                        </form>
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