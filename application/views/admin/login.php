<?php 
    $this->load->view('admin/head');
?>

    <body class="app-ui login-background">
        <div class="app-layout-canvas">
            <div class="app-layout-container">


                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page header -->
                    <!-- End Page header -->

                    <!-- Page content -->
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                <!-- Login card -->
                                <div class="col-sm-offset-3 col-md-6">
                                    <div class="login_card card">
                                        <h3 class="card-header h4">Login</h3>
                                            <p style="color: red;text-align: center;">
                                                <?php
                                                    $message = $this->session->userdata('message');
                                                    if ($message) 
                                                    {
                                                        echo $message;
                                                        $this->session->unset_userdata('message');
                                                    }
                                                ?>

                                            </p>
                                        <div class="card-block">
                                            <form action="<?php echo base_url()?>login-check" method="post">
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_email">Email</label>
                                                    <input type="email" class="form-control" id="frontend_login_email" placeholder="Email" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_password">Password</label>
                                                    <input type="password" class="form-control" id="frontend_login_password" placeholder="Password" name="password" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
									<input type="checkbox" id="frontend_login_remember" /><span></span> Remember me</a>
								</label>
                                                </div>
                                                <button type="submit" class="btn btn-app btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- End page content -->
                </main>

            </div>
            <!-- .app-layout-container -->
        </div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app-custom.js"></script>

    </body>

</html>