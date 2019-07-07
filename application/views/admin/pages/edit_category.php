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
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>update-category" method="post" enctype="multipart/form-data" name="edit_category">

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter category name" name="category_name" value="<?php echo $category_info->category_name; ?>" required />
                            <input type="hidden" class="span6 typeahead" id="typeahead" value="<?php echo $category_info->category_id; ?>"  name="category_id" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Image </label>
                        <div class="col-md-8">
                            <input class="form-control" type="file" id="" name="category_image">

                                <input  name="category_old_image"  value="<?php echo $category_info->category_image; ?>" type="hidden">

                            <img src="<?php echo base_url().$category_info->category_image; ?>" width="100" height="100" alt="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Description <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <textarea class="form-control" id=""  rows="8" placeholder="Enter category description..." name="category_description"  required="1"><?php echo $category_info->category_description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="publication_status"  value="<?php echo $category_info->publication_status; ?>" required="1">
                                <option value="">Please select</option>
                                <option value="1">Published </option>
                                <option value="0">Unpublished </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="col-md-12 btn btn-app-teal" type="submit">Update Category</button>
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
        
        document.forms['edit_category'].elements['publication_status'].value=<?php echo $category_info->publication_status ?> 
    </script>
