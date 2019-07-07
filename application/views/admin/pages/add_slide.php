<div class="row">
    <div class="col-lg-8">
            <?php if ($this->session->flashdata('msg')) {?>
                <div class='alert alert-success alert-dismissable'>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><strong>Well done! </strong><?php echo $this->session->flashdata('msg'); ?></p>
                </div>
            <?php } elseif($this->session->flashdata('err')) { ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><strong>Warning! </strong><?php echo $this->session->flashdata('err'); ?></p>
                </div>
            <?php } ?>

        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <!-- <h4>Add Brand</h4> -->
                <ul class="card-actions">
                    <li>
                        <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="card-action" data-action="content_toggle"><i class="ion-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block">
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url('save-slide');?>" enctype="multipart/form-data" method="post">

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Short Title<span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter short title" name="short_title" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Long Title<span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter long title" name="long_title" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Slide Image</label>
                        <div class="col-md-8">
                            <input class="form-control" type="file" id="" name="slide_img" required="1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Slide Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id=""  rows="6" placeholder="Enter category description..." name="slide_desc"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="col-md-12 btn btn-app-teal" type="submit">Add Slide</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .card-block -->
        </div>
        <!-- .card -->
        <!-- Bootstrap Forms Validation -->
    </div>
    <!-- .col-lg-6 -->

</div>
