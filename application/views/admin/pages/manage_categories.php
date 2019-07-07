
<!-- Dynamic Table Full -->
<?php if ($this->session->flashdata('msg')) {?>
    <div class='alert alert-success alert-dismissable'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><strong>Well done! </strong><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
<?php } ?>
<div class="card">

    <div class="card-block">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th class="hidden-xs" style="width: 100px;">Total Subcategory</th>
                    <th class="hidden-xs" style="width: 100px;">Total Product</th>
                    <th class="hidden-xs">Category Description</th>
                    <th class="hidden-xs w-8" style="width: 100px;">Status</th>
                    <th class="text-center" style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    foreach ($all_category_info as  $v_category) {

                    $i++;
                    $cate_desc = $v_category->category_description;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="font-500"><?php echo $v_category->category_name; ?></td>
                    <td class="font-500"><img style="height: 70px;width: 70px" src="<?php echo base_url().$v_category->category_image; ?>" alt="" ></td>
                    <td class="hidden-xs"><?php echo $v_category->subcat_count; ?></td>
                    <td class="hidden-xs"><?php echo $v_category->product_count; ?></td>
                    <td class="hidden-xs"><?php echo character_limiter($cate_desc, 30); ?></td>
                    <td class="hidden-xs">
                         <?php if($v_category->publication_status==1){?>
                            <a href="<?php echo base_url()?>unpublish-category/<?php echo $v_category->category_id; ?>">
                                <span class="label label-success">Active</span>
                            </a>
                        <?php }else{?>
                            <a href="<?php  echo base_url()?>publish-category/<?php echo $v_category->category_id; ?>">
                                <span class="label label-danger">Inactive</span>
                            </a>
                        <?php }?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="<?php  echo base_url()?>edit-category/<?php echo $v_category->category_id; ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></a>
                            <a href="<?php  echo base_url()?>delete-category/<?php echo $v_category->category_id; ?>" onclick="return confirm('Are you sure to delete this!');" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></a>
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