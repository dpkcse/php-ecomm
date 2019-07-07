 <div class="row">
    <div class="col-lg-8">
        <!-- Bootstrap Forms Validation -->
        <!-- <h2 class="section-title">Add Category</h2> -->
        <?php if ($this->session->flashdata('msg')) {?>
            <div class='alert alert-success alert-dismissable'>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><strong>Well done! </strong><?php echo $this->session->flashdata('msg'); ?></p>
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
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>save-manufacture" enctype="multipart/form-data" method="post">

					<div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="category_id" required="1">
                                <option value="">Please select</option>
                                <?php foreach ($publish_category_info as  $v_category) { ?>
                                <option value="<?php echo $v_category->category_id?>"><?php echo $v_category->category_name?> </option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Subcategory Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter category name" name="manufacture_name" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Subcategory Image </label>
                        <div class="col-md-8">
                            <input class="form-control" type="file" id="" name="manufacture_image" required="1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Subcategory Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id=""  rows="6" placeholder="Enter category description..." name="manufacture_description"></textarea>
                        </div>
                    </div>
                    <!-- <div class="form-group"> -->
                        <!-- <label class="col-md-3 control-label" for="">Subcategory For <span class="text-orange">*</span></label> -->
                        <!-- <div class="col-md-8"> -->
                            <!-- <select class="form-control" id="" name="manufacture_for" required="1"> -->
                                <!-- <option>Please select</option> -->
                                <!-- <option value="1">Men</option> -->
                                <!-- <option value="2">Women</option> -->
                                <!-- <option value="3">Boys</option> -->
                                <!-- <option value="4">Girls</option> -->
                                <!-- <option value="5">Kids</option> -->
                            <!-- </select> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="publication_status" required="1">
                                <option value="">Please select</option>
                                <option value="1">Published </option>
                                <option value="0">Unpublished </option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="col-md-12 btn btn-app-teal" type="submit">Add Subcategory</button>
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
