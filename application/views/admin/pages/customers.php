<div class="card">
    <div class="card-block">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Name</th>
                    <th class="hidden-xs w-15">Phone</th>
                    <th class="hidden-xs w-15">Email</th>
                    <th class="hidden-xs w-15">Address</th>
                    <th class="hidden-xs w-15">Total Orders</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            foreach($customer_list as $c_value){
            $i++;
            
            ?>
                <tr>
                    <td class="text-center"> <?php echo $i ?> </td>
                    <td><?php echo $c_value->customer_name; ?></td>
                    <td><?php echo $c_value->customer_phone; ?></td>
                    <td><?php echo $c_value->customer_email; ?></td>
                    <td><?php echo $c_value->customer_addr; ?></td>
                    <td><?php echo $c_value->customer_total_orders; ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- .card-block -->
</div>