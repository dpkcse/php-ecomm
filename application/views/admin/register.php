<?php
    $this->load->view('admin/head');
?>

    <body class="app-ui login-background">
        <div class="app-layout-canvas">
            <div class="app-layout-container">
                <!-- End header -->
                <main class="app-layout-content">
                    <!-- Page content -->
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                <!-- Sign up -->
                                <div class="col-sm-offset-3 col-md-6">
                                    <div class="login_card card">

                                        <p style="color: red">
                                            <?php
                                            //if(isset($success_message)){
                                                    // echo $success_message;
                                            //}
                                            ?>

                                            <?php echo validation_errors(); ?>
                                        </p>

                                        <h3 class="card-header h4">Sign up</h3>
                                        <div class="card-block">
                                            <form class="form-horizontal" action="<?php echo base_url()?>save-register-user" method="post">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_username">Username</label>
                                                        <input class="form-control" type="text" id="frontend_signup_username" placeholder="Username" value="<?php echo set_value('username'); ?>" name="username" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_email">Email</label>
                                                        <input class="form-control" type="email" id="frontend_signup_email" placeholder="Email" value="<?php echo set_value('email'); ?>" name="email" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_password">Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_password" placeholder="Password" name="password" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_confirm_password" placeholder="Confirm password" name="confirm_password" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <label for="frontend_signup_terms" class="css-input switch switch-sm switch-app">
                                                            <input type="checkbox" id="frontend_signup_terms" name="frontend_signup_terms" /><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-app btn-block" type="submit">Sign Up</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->

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