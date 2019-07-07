<div class="row">
    <div class="col-lg-8">
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
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>save-product" enctype="multipart/form-data"  method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter category name" name="product_name" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Brand Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="brand_id" required="1">
                                <option disabled selected>Please select</option>
                                <?php foreach ($publish_brand_info as  $v_brand) { ?>
                                <option value="<?php echo $v_brand->brand_id?>"><?php echo $v_brand->brand_name?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" onchange="productCategory()" id="product_cat" name="category_id" required="1">
                                <option disabled selected>Please select</option>
                                <?php foreach ($publish_category_info as  $v_category) { ?>
                                <option value="<?php echo $v_category->category_id?>"><?php echo $v_category->category_name?> </option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Subcategory Name<span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="product_subcat" name="manufacture_id" required="1">
                                <option disabled selected>Please select</option>
                                <?php //foreach ($publish_manufacture_info as  $v_manufacture) { ?>
                                <!-- <option value="<?php // echo $v_manufacture->manufacture_id?>"><?php // echo $v_manufacture->manufacture_name?> </option> -->
                                <?php // } ?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Model</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter product model" name="product_model"/>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product For <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="product_for" required="1">
                                <option disabled selected>Please select</option>
                                <option value="1">Man</option>
                                <option value="2">Woman</option>
                                <option value="3">Boys</option>
                                <option value="4">Girls</option>
                                <option value="5">Kids</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Short Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id=""  rows="4" placeholder="Enter category description..." name="product_short_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Long Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id=""  rows="7" placeholder="Enter category description..." name="product_long_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Price <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter product price " name="product_price" min="1" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Discount Price</label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter Discount price " name="product_new_price" min="1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Quantity <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter product Quantity " name="product_quantity" min="1" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Images </label>
                        <div class="col-md-8">
                            <div class="row" style="margin-bottom:8px">
                                <div class="col-md-12">
                                    <div class="">
                                        <label class="col-md-12 btn btn-info" for="featureImg">
                                        Feature Image
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="featureImg" name="product_image" required="1" onchange="document.getElementById('add_pro1').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:8px">
                                <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image2">
                                        Image 2
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image2" name="product_image2" onchange="document.getElementById('add_pro2').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image3">
                                        Image 3
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image3" name="product_image3" onchange="document.getElementById('add_pro3').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row" style="">
                                <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image4">
                                        Image 4
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image4" name="product_image4" onchange="document.getElementById('add_pro4').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image5">
                                        Image 5
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image5" name="product_image5" onchange="document.getElementById('add_pro5').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="publication_status" required="1">
                                <option disabled selected>Please select</option>
                                <option value="1">Published </option>
                                <option value="0">Unpublished </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-xs-6">
                            <div class="radio">
                                <label for="radio1">
                                    <input type="radio" id="radio1" name="pro_label" value="Hot"> Hot
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2">
                                    <input type="radio" id="radio2" name="pro_label" value="New"> New
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio3">
                                    <input type="radio" id="radio3" name="pro_label" value="Sale"> Sale
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-md-offset-3 col-xs-6">
                            <p>
                                <label class="css-input switch switch-info">
                                    <input type="checkbox" name="is_featured"><span></span> Is featured
                                </label>
                            </p>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="col-md-12 btn btn-app-teal" type="submit">Add Product</button>
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Product Gallery</h4>
                <ul class="card-actions">
                    <li>
                        <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="card-action" data-action="content_toggle"><i class="ion-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block add_img_gallery" style="display:flow-root">
                <div class="col-md-10 col-md-offset-1 per_img_div">
                    <img id="add_pro1" src="<?php echo base_url();?>/upload/images.png" alt="Feature Product"/>
                </div>
                <div class="col-md-10 col-md-offset-1 per_img_div">
                    <img id="add_pro2" src="<?php echo base_url();?>/upload/images.png" alt="Feature Product"/>
                </div>
                <div class="col-md-10 col-md-offset-1 per_img_div">
                    <img id="add_pro3" src="<?php echo base_url();?>/upload/images.png" alt="Feature Product"/>
                </div>
                <div class="col-md-10 col-md-offset-1 per_img_div">
                    <img id="add_pro4" src="<?php echo base_url();?>/upload/images.png" alt="Feature Product"/>
                </div>
                <div class="col-md-10 col-md-offset-1 per_img_div">
                    <img id="add_pro5" src="<?php echo base_url();?>/upload/images.png" alt="Feature Product"/>
                </div>
            </div>
        </div>
    </div>
</div>
