            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url() ?>assets/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/sweetalert.min.js"></script>
  <script>
    $('.btn-del').on('click',function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'hapus data ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'delete'
        }).then((result) => {
            if (result.value) {
            document.location.href = href;
            }
        })
        })
    </script>
</body>

</html>