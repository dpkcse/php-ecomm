
        
        <!-- Stats -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a class="card" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">All Product</p>
                            <p class="h3 text-blue m-t-sm m-b-0"><?php echo $count['all_product_count'][0]->count ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-cube fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-green bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">All Category</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $count['all_category_count'][0]->count ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-pricetags fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">All Subcategory</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $count['all_subcategory_count'][0]->count ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-clipboard fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">New Orders</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $count['all_orders_count'][0]->count ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-archive fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->
        </div>
        <!-- .row -->
        <!-- End stats -->
  