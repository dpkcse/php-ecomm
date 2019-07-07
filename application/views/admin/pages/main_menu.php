<div class="row">
    <div class="col-lg-12">
    <?php if($this->session->flashdata('msg')): ?>
        <div class='alert alert-success alert-dismissable'>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <p><strong>Well done! </strong><?php echo $this->session->flashdata('msg'); ?></p>
        </div>
    <?php endif; ?>
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Add Menu Item</h4>
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
                <form class="form-horizontal m-t-xs" action="<?php echo base_url('supper_admin/addMenu_Item');?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-xs-3">
                            <label for="">Menu name</label>
                            <input class="form-control" type="text" name="itemname" Placeholder="Enter Item name" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="">Menu Icon</label>
                            <button class="btn btn-app btn-block" data-toggle="modal" data-target="#modal-fa" type="button">Add Icon</button>
                            <div id="viewIcon" style="margin-top:8px" class="text-center"></div>
                            <input type="text" id="valueForMenuItem" name="fa_class" hidden>
                        </div>
                        <div class="col-xs-2">
                            <label for="">Publication</label>
                            <select name="item_status" id="" class="form-control">
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <label for="">Has Link</label>
                            <input class="form-control" type="text" name="haslink" placeholder="www.example.com">
                        </div>
                        <div class="col-xs-2">
                            <label for="" class="m-b-3"> </label>
                            <button class="btn btn-app-teal form-control" type="submit">Add Menu</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .card-block -->
        </div>

        <div class="card">
            <div class="card-block">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Menu Name</th>
                            <th class="hidden-xs w-15">Menu icon</th>
                            <th class="hidden-xs w-15" style="width: 100px;">Has Link</th>
                            <th class="hidden-xs w-15" style="width: 100px;">Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach($total_menu as $value){
                    $i++;
                    
                    ?>
                        <tr>
                            <td class="text-center"> <?php echo $i ?> </td>
                            <td><?php echo $value->item_name; ?></td>
							<td class="text-center"><i class="<?php echo $value->fa_class; ?> fa-2x"></i></td>
							<td><?php echo $value->has_link; ?></td>
							<td>
								<?php if ($value->status == 1) { ?>
									<a style="text-decoration:none" href="<?php echo base_url('supper_admin/inactive_menu/'.$value->id)?>"> <span class="label label-success">Active</span></a>
								<?php } else if ($value->status == 0){ ?>
									<a style="text-decoration:none" href="<?php echo base_url('supper_admin/active_menu/'.$value->id)?>"> <span class="label label-danger">Inactive</span></a>
								<?php } ?>

							</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php  echo base_url('supper_admin/edit_menu/'.$value->id);?>" class="btn btn-xs btn-app-teal" type="button" data-toggle="tooltip" title="" data-original-title="Edit Menu"><i class="ion-edit"></i></a>
                                    <a href="<?php  echo base_url('supper_admin/delete_menu/'.$value->id);?>" class="btn btn-xs btn-app-red" type="button" data-toggle="tooltip" title="" data-original-title="Remove Menu"><i class="ion-android-delete"></i></a>
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
</div>



<div class="modal fade in" id="modal-fa" tabindex="-1" role="dialog" aria-hidden="false" style="display: none;">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="card-header bg-teal bg-inverse">
                <h4>Select Icon</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block">
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center w-5">Icon</th>
                        <th class="p-l-lg">icon name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-camera fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-camera</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-camera')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-desktop fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-desktop</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-desktop')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-laptop fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-laptop</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-laptop')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-tablet fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-tablet</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-tablet')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-gamepad fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-gamepad</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-gamepad')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-male fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-male</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-male')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-female fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-female</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-female')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-child fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-child</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-child')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-car fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-car</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-car')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-futbol-o fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-futbol-o</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-futbol-o')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-motorcycle fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-motorcycle</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-motorcycle')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-television fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-television</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-television')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-shopping-bag fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-shopping-bag</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-shopping-bag')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="ion-tshirt fa-2x"></i></th>
                        <td class="p-l-lg">ion-tshirt</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('ion-tshirt')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-cube fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-cube</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-cube')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="ion-umbrella fa-2x"></i></th>
                        <td class="p-l-lg">ion-umbrella</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('ion-umbrella')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="ion-medkit fa-2x"></i></th>
                        <td class="p-l-lg">ion-medkit</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('ion-medkit')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"><i class="fa fa-mobile fa-2x"></i></th>
                        <td class="p-l-lg">fa fa-mobile</td>
                        <td><div class="btn btn-app-cyan btn-block" data-dismiss="modal" onclick="addIconMenu('fa fa-mobile')"><i class="fa fa-plus-circle"></i> Add</div></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<script>
    function addIconMenu(data){
        var design = '<i class="'+data+' fa-2x"></i>';
        $('#viewIcon').html('');
        $('#viewIcon').append(design);
        $('#valueForMenuItem').val(data);
    }
</script>
