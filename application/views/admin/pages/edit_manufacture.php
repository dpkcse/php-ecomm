 <div class="row">
        <div class="col-lg-8">
            <!-- Bootstrap Forms Validation -->
            <!-- <h2 class="section-title">Add Category</h2> -->
            <?php
                $message = $this->session->userdata('message');
                if ($message) { ?>
                    
                    <div class='alert alert-success alert-dismissable'>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><strong>Well done! </strong><?php echo $message; $this->session->unset_userdata('message'); ?></p>
                    </div>
                <?php } ?>
            <div class="card">
                <div class="card-header bg-teal bg-inverse">
                    <!-- <h4>Material</h4> -->
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
                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                    <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-bootstrap form-horizontal" name="edit_manufacture" action="<?php echo base_url();?>update-manufacture" enctype="multipart/form-data" method="post">

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
                            <label class="col-md-3 control-label" for="">Manufacture Name <span class="text-orange">*</span></label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id=""  placeholder="Enter category name" name="manufacture_name" value="<?php echo $select_manufacture_by_id->manufacture_name; ?>" required />
                                <input class="form-control" type="hidden" id=""  name="manufacture_id" value="<?php echo $select_manufacture_by_id->manufacture_id; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="">Manufacture Image </label>
                            <div class="col-md-8">
                                <input class="form-control" type="file" id="" name="manufacture_image" >

                                <input  name="manufacture_old_image"  value="<?php echo $select_manufacture_by_id->manufacture_image; ?>" type="hidden">

                                <img src="<?php echo base_url().$select_manufacture_by_id->manufacture_image; ?>" width="100" height="100" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="">Manufacture Description <span class="text-orange">*</span></label>
                            <div class="col-md-8">
                                <textarea class="form-control" id=""  rows="8" placeholder="Enter category description..." name="manufacture_description" required="1"><?php echo $select_manufacture_by_id->manufacture_description; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                            <div class="col-md-8">
                                <select class="form-control" id="" name="publication_status" value="<?php echo $select_manufacture_by_id->publication_status; ?>"  required="1">
                                    <option value="">Please select</option>
                                    <option value="1">Published </option>
                                    <option value="0">Unpublished </option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group m-b-0">
							<div class="col-md-8 col-md-offset-3">
								<button class="col-md-12 btn btn-app-teal" type="submit">Update Subcategory</button>
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
     <script>
        
        document.forms['edit_manufacture'].elements['category_id'].value=<?php echo $select_manufacture_by_id->category_id ?> 
        document.forms['edit_manufacture'].elements['publication_status'].value=<?php echo $select_manufacture_by_id->publication_status ?> 
    </script>
