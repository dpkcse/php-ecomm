<div class="row">
    <div class="col-lg-12">
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
    
        <?php if ($title == "Brands") { ?>
           
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Add Brand</h4>
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
                <form class="form-horizontal m-t-xs" action="<?php echo base_url('supper_admin/save_brand');?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label for="">Brand name</label>
                            <input class="form-control" type="text" name="brandname" Placeholder="Enter brand name" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="">Brand logo</label>
                            <input class="form-control" type="file" name="brandlogo" required>
                        </div>
                        <div class="col-xs-4">
                                <label for="" class="m-b-3"> </label>
                                <button class="btn btn-app-teal form-control" type="submit">Add Brand</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .card-block -->
        </div>
        <?php }elseif ($title == 'Edit Brand') { ?>
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Edit Brand</h4>
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
                <form class="form-horizontal m-t-xs" action="<?php echo base_url('supper_admin/update_brand');?>" enctype="multipart/form-data" method="post">
                    <?php foreach ($brand_by_id as $value) { ?>
                    
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label for="">Brand name</label>
                            <input class="form-control" type="text" name="brandname" value="<?php echo $value->brand_name; ?>" required>
                            <input type="hidden" value="<?php echo $value->brand_id;?>"  name="brand_id" >
                        </div>
                        <div class="col-xs-4">
                            <label for="">Brand logo</label>
                            <input class="form-control" type="file" name="new_brandlogo" value="">
                            <input class="form-control" type="hidden" name="old_brandlogo" value="<?php echo $value->brand_logo; ?>">
                        </div>
                        <div class="col-xs-2">
                        <img style="max-width: 100%;height:100px;" src="<?php echo base_url();echo $value->brand_logo;?>" alt="">
                        </div>
                        <div class="col-xs-2">
                                <label for="" class="m-b-3"> </label>
                                <button class="btn btn-app-teal form-control" type="submit">Update Brand</button>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
            <!-- .card-block -->
        </div>
        <?php } ?>
        <!-- .card -->
        <div class="card">

            <div class="card-block">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Brand Name</th>
                            <th class="hidden-xs w-15">Brand Logo</th>
                            <th class="hidden-xs w-15" style="width: 100px;">Total Product</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach($brand_info_list as $brand_value){
                    $i++;
                    
                    ?>
                        <tr>
                            <td class="text-center"> <?php echo $i ?> </td>
                            <td><?php echo $brand_value->brand_name; ?></td>
                            <td class="hidden-xs">
								<img style="height: 70px;width: 70px" src="<?php echo base_url().$brand_value->brand_logo; ?>" alt="" >
							</td>
							<td>0</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php  echo base_url('supper_admin/edit_brand/'.$brand_value->brand_id);?>" class="btn btn-xs btn-app-teal" type="button" data-toggle="tooltip" title="" data-original-title="Edit Brand"><i class="ion-edit"></i></a>
                                    <a href="<?php  echo base_url('supper_admin/delete_brand/'.$brand_value->brand_id);?>" class="btn btn-xs btn-app-red" type="button" data-toggle="tooltip" title="" data-original-title="Remove Brand"><i class="ion-android-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- .card-block -->
        </div>
    </div>
    <!-- .col-lg-6 -->
</div>
