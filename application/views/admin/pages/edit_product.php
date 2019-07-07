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
            <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>update-product" enctype="multipart/form-data"  method="post" name="edit_product">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Name <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" type="text"  placeholder="Enter category name" name="product_name" value="<?php echo $product_info->product_name; ?>" required />
                        <input type="hidden"  value="<?php echo $product_info->product_id; ?>"  name="product_id" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Category Name <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <select class="form-control" name="category_id" required="1">
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
                        <select class="form-control" name="manufacture_id" required="1">
                            <option value="">Please select</option>
                            <?php foreach ($publish_manufacture_info as  $v_manufacture) { ?>
                            <option value="<?php echo $v_manufacture->manufacture_id?>"><?php echo $v_manufacture->manufacture_name?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Model <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo $product_info->product_model; ?>" name="product_model" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Short Description  <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <textarea class="form-control"  rows="4" placeholder="Enter category description..." name="product_short_description" required="1"><?php  echo $product_info->product_short_description; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Long Description  <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <textarea class="form-control"  rows="7" placeholder="Enter category description..." name="product_long_description" required="1"><?php  echo $product_info->product_long_description; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Price <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" type="number"  placeholder="Enter product price " value="<?php echo $product_info->product_price?>" name="product_price" min="1" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product New Price <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" type="number"  placeholder="Enter product New price " value="<?php echo $product_info->product_new_price?>" name="product_new_price" min="1" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Quantity <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" type="number"  placeholder="Enter product Quantity " value="<?php echo $product_info->product_quantity; ?>" name="product_quantity" min="1" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Product Image </label>
                    <div class="col-md-3">
                        <label for="img_1" style="cursor:pointer;border-radius:5px;border:2px solid #d8d8d8">
                            <input style="display:none" id="img_1" class="form-control" type="file" name="product_image">
                            <input  name="product_old_image"  value="<?php echo $product_info->product_image; ?>" type="hidden">
                            <img src="<?php echo base_url().$product_info->product_image; ?>" width="100" height="100" alt="">
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="img_2" style="cursor:pointer;border-radius:5px;border:2px solid #d8d8d8">
                            <input style="display:none" id="img_2" class="form-control" type="file" name="product_image">
                            <input  name="product_old_image"  value="<?php echo $product_info->product_img2; ?>" type="hidden">
                            <img src="<?php echo base_url().$product_info->product_img2; ?>" width="100" height="100" alt="">
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="img_3" style="cursor:pointer;border-radius:5px;border:2px solid #d8d8d8">
                            <input style="display:none" id="img_3" class="form-control" type="file" name="product_image">
                            <input  name="product_old_image"  value="<?php echo $product_info->product_img3; ?>" type="hidden">
                            <img src="<?php echo base_url().$product_info->product_img3; ?>" width="100" height="100" alt="">
                        </label>
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <label for="img_4" style="cursor:pointer;border-radius:5px;border:2px solid #d8d8d8">
                            <input style="display:none" id="img_4" class="form-control" type="file" name="product_image">
                            <input  name="product_old_image"  value="<?php echo $product_info->product_img4; ?>" type="hidden">
                            <img src="<?php echo base_url().$product_info->product_img4; ?>" width="100" height="100" alt="">
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="img_5" style="cursor:pointer;border-radius:5px;border:2px solid #d8d8d8">
                            <input style="display:none" id="img_5" class="form-control" type="file" name="product_image">
                            <input  name="product_old_image"  value="<?php echo $product_info->product_img5; ?>" type="hidden">
                            <img src="<?php echo base_url().$product_info->product_img5; ?>" width="100" height="100" alt="">
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                    <div class="col-md-8">
                        <select class="form-control" name="publication_status" required="1">
                            <option value="">Please select</option>
                            <option value="1">Published </option>
                            <option value="0">Unpublished </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-xs-6">
                        <p>
                            <label class="css-input switch switch-info">
                                <?php  if ($product_info->is_featured == 1) { ?>
                                    <input type="checkbox" name="is_featured" checked=""><span></span> Is featured
                                <?php }else{ ?>
                                    <input type="checkbox" name="is_featured"><span></span> Is featured
                                <?php }?>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="form-group m-b-0">
                    <div class="col-md-8 col-md-offset-3">
                        <button class="col-md-12 btn btn-app-teal" type="submit">Update Product</button>
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
        document.forms['edit_product'].elements['category_id'].value=<?php echo $product_info->category_id ?>;
        document.forms['edit_product'].elements['manufacture_id'].value=<?php echo $product_info->manufacture_id ?> 
        document.forms['edit_product'].elements['publication_status'].value=<?php echo $product_info->publication_status ?> 
    </script>
