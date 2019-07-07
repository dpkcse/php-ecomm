<!-- Dynamic Table Full -->
<div class="card">
    <!-- <div class="card-header">
        <h4>Dynamic Table - Full</h4>
    </div> -->
    <div class="card-block">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th >Id</th>
                    <th>Manufacture Name</th>
                    <th>Image </th>
                    <th class="hidden-xs">Manufacture Description</th>
                    <th class="hidden-xs" style="width: 100px;">Total Product</th>
                    <th class="hidden-xs" style="width: 100px;">Status</th>
                    <th class="text-center" style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 0;
                    foreach ($all_manufacture_info as  $v_manufacture) {
                    
                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="font-500"><?php echo $v_manufacture->manufacture_name; ?></td>
                    <td class="font-500"><img style="height: 70px;width: 70px" src="<?php echo base_url().$v_manufacture->manufacture_image; ?>" alt="" ></td>
                    <td class="hidden-xs"><?php echo $v_manufacture->manufacture_description; ?></td>
					<td>0</td>
					<td class="hidden-xs">
                        <?php if($v_manufacture->publication_status==1){?>
                        <a class="" href="<?php echo base_url()?>unpublish-manufacture/<?php echo $v_manufacture->manufacture_id; ?>">
                            <span class="label label-success">Active</span>
                        </a>
                        <?php }else{?>
                            <a class="" href="<?php  echo base_url()?>publish-manufacture/<?php echo $v_manufacture->manufacture_id; ?>">
                                <span class="label label-danger">Inactive</span> 
                            </a>
                        <?php }?>
                    
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="<?php echo base_url()?>edit-manufacture/<?php echo $v_manufacture->manufacture_id; ?>" class="btn btn-xs btn-app-teal" type="button" data-toggle="tooltip" title="Edit Subcategory"><i class="ion-edit"></i></a>

                            <a href="<?php echo base_url()?>delete-manufacture/<?php echo $v_manufacture->manufacture_id; ?>" onclick="return confirm('Are you sure to delete this!');" class="btn btn-xs btn-app-red" type="button" data-toggle="tooltip" title="Delete Subcategory"><i class="ion-android-delete"></i></a>
                        </div>
                    </td>
                </tr>
            
                
                <?php } ?>
                
            </tbody>
        </table>
    </div>
    <!-- .card-block -->
</div>
<!-- .card -->
<!-- End Dynamic Table Full -->
                    