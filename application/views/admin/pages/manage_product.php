
<!-- Dynamic Table Full -->

<?php if ($this->session->flashdata('msg')) {?>
    <div class='alert alert-success alert-dismissable'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><strong>Well done! </strong><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
<?php } ?>
<div class="card">
    <!-- <div class="card-header">
        <h4>Dynamic Table - Full</h4>
    </div> -->
    <div class="card-block">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Product Name</th>
                    <th class="hidden-xs" style="width: 100px">Product Price</th>
                    <th class="hidden-xs" style="width: 100px">Product Quantity</th>
                    <th class="hidden-xs" style="width: 150px">Product Image</th>
                    <th class="hidden-xs" style="width: 100px">Label</th>
                    <th class="hidden-xs" style="width: 100px">Status</th>
                    <th class="text-center" style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    foreach ($all_product_info as  $v_product) {

                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="font-500"><?php echo $v_product->product_name; ?></td>
                    <td class="hidden-xs"><?php echo $v_product->product_new_price; ?></td>
                    <td class="hidden-xs"><?php echo $v_product->product_quantity; ?></td>
                    <td class="center"><img style="height: 70px;width: 70px" src="<?php echo base_url().$v_product->product_image; ?>" alt="" >
                    </td>

                    <td class="hidden-xs">
                        <?php if ($v_product->pro_label == 'New') { ?>
							<a href="<?php echo base_url('supper_admin/unpublish_new/'.$v_product->product_id);?>"> <span class="label label-success">New</span></a>
						<?php } else { ?>
							<a href="<?php echo base_url('supper_admin/publish_new/'.$v_product->product_id)?>"> <span class="label label-danger">New</span></a>
						<?php } ?>

                        <?php if ($v_product->pro_label == 'Hot') { ?>
							<a href="<?php echo base_url('supper_admin/unpublish_hot/'.$v_product->product_id);?>"> <span class="label label-success">Hot</span></a>
						<?php } else { ?>
							<a href="<?php echo base_url('supper_admin/publish_hot/'.$v_product->product_id)?>"> <span class="label label-danger">Hot</span></a>
						<?php } ?>

                        <?php if ($v_product->pro_label == 'Sale') { ?>
							<a href="<?php echo base_url('supper_admin/unpublish_sale/'.$v_product->product_id);?>"> <span class="label label-success">Sale</span></a>
						<?php } else { ?>
							<a href="<?php echo base_url('supper_admin/publish_sale/'.$v_product->product_id)?>"> <span class="label label-danger">Sale</span></a>
						<?php } ?>
                    </td>
                    
                    <td class="hidden-xs">
                        <?php
                        if ($v_product->publication_status==1) {  ?>
                           <a href="<?php echo base_url()?>unpublish-product/<?php echo $v_product->product_id; ?>"> <span class="label label-success">Active</span></a>
                        <?php  } else{?>
                            <a href="<?php echo base_url()?>publish-product/<?php echo $v_product->product_id; ?>"> <span class="label label-danger">Inactive</span> </a>
                        <?php  } ?>

                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="<?php echo base_url()?>edit-product/<?php echo $v_product->product_id; ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Product"><i class="ion-edit"></i></a>
                            <a href="<?php echo base_url()?>delete-product/<?php echo $v_product->product_id; ?>" onclick="return confirm('Are you sure to delete this!');" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete Product"><i class="ion-android-delete"></i></a>
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
