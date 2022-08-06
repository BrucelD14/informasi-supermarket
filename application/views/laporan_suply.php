<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body">
                        <h4 class="card-title">Data Laporan Suply</h4>
                    <div class="table-responsive">
                          <table id="zero_config" class="table table-striped table-bordered no-wrap">
                              <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>Tanggal</th>
                                      <th>Nama Barang</th>
                                      <th>Stok</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $no=1;
                                      foreach($hasil as $data){
                                  ?>
                                  <tr>
                                      <td><?php echo $no++;?></td>
                                      <td><?php echo htmlentities($data->waktu_suply, ENT_QUOTES, 'UTF-8');?></td>
                                      <td><?php echo htmlentities($data->nama_barang, ENT_QUOTES, 'UTF-8');?></td>
                                      <td><?php echo htmlentities($data->stok, ENT_QUOTES, 'UTF-8');?></td>
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