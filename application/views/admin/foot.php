
              </div>
                <!-- .container-fluid -->
                <!-- End Page Content -->

            </main>


            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="/akt_shop/dashboard">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="/akt_shop">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app-custom.js"></script>

        <!-- Page Plugins -->
        <script src="<?php echo base_url()?>assets/admin/js/plugins/slick/slick.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/plugins/chartjs/Chart.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/plugins/flot/jquery.flot.resize.min.js"></script>

        <!-- Page JS Code -->
        <!-- <script src="assets/admin/js/pages/index.js"></script> -->

        <?php if($title == "Manage Categories" || $title == "Manage Manufacture" || $title == "Manage Product"){ ?>
            <script src="<?php echo base_url()?>assets/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url()?>assets/admin/js/pages/base_tables_datatables.js"></script>
        <?php }?>
           


        <script>
            $(function()
            {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
        <script>
            function productCategory() {
                var category_id = $('#product_cat').val();
                console.log(category_id);
                if(category_id != ''){
                    $.ajax({
                        url: "<?php echo base_url();?>supper_admin/getSubCateBy_category",
                        method: "POST",
                        data: {category_id:category_id},
                        success: function (data) {
                            $('#product_subcat').html(data);
                        }
                    });
                }else{
                    $('#product_subcat').html('<option disabled selected>Please select</option>');
                }
            }
        </script>


    </body>

</html>