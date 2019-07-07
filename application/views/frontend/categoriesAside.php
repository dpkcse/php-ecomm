<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <?php foreach($total_menu as $vmenu){if($vmenu->status == 1){ ?> 
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="width:15px; height:100%; text-align:center" class="icon <?php if($vmenu->fa_class !== ''){echo $vmenu->fa_class;}else{echo 'fa fa-shopping-bag';} ?>" aria-hidden="true"></i><?php echo $vmenu->item_name; ?></a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                      <?php foreach($all_category_info as $v_cate){if($v_cate->menu_id == $vmenu->id && $v_cate->publication_status == 1){ ?> 
                        <div class="col-sm-12 col-md-3">
                          <h2 class="title" style="margin:2px 0px"><a href="<?php echo base_url()?>category-view/<?php echo $v_cate->category_id ?>" style="padding:0px;"><?php echo $v_cate->category_name;?></a></h2>
                          <ul class="links list-unstyled">
                          <?php foreach($all_manufacture_info as $v_scate){if($v_scate->category_id == $v_cate->category_id && $v_scate->publication_status == 1){ ?>
                              <li><a href="<?php echo base_url()?>manufacture-view/<?php echo $v_scate->manufacture_id ?>"><?php  echo $v_scate->manufacture_name; ?></a></li>
                          <?php }}?>
                          </ul>
                        </div>
                        <?php }}?>
                        <!-- /.col -->
                      </div>
                      <!-- /.row --> 
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                </li>
              <!-- /.menu-item -->
              
            </ul>
            <!-- /.nav --> 
          </nav>

          <?php }} ?>
            <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Offer</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <?php $i = 0; foreach($all_product_info as $v_product){if($v_product->publication_status == 1 && $v_product->product_new_price > 0 && $i < 3 ){++$i; ?> 
                    
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
  
                  <?php }}?>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <?php $i2 = 0; $i = 0; foreach($all_product_info as $v_product){ if($v_product->publication_status == 1 && $v_product->product_new_price > 0 &&  $i < 6){++$i; $i2++; if($i2 > 3){ ?>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  <?php } } }?>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <?php $i = 0; $i2 = 0; foreach($all_product_info as $v_product){ if($v_product->publication_status == 1 && $v_product->product_new_price > 0 && $i < 9){ ++$i; $i2++; if($i2 > 6){ ?>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  <?php }}}?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->
        <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list"> <a class="item" title="Phone" href="#">Phone</a> <a class="item active" title="Vest" href="#">Vest</a> <a class="item" title="Smartphone" href="#">Smartphone</a> <a class="item" title="Furniture" href="#">Furniture</a> <a class="item" title="T-shirt" href="#">T-shirt</a> <a class="item" title="Sweatpants" href="#">Sweatpants</a> <a class="item" title="Sneaker" href="#">Sneaker</a> <a class="item" title="Toys" href="#">Toys</a> <a class="item" title="Rose" href="#">Rose</a> </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Hot Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                <?php $i = 0; foreach($all_product_info as $v_product){ if($v_product->publication_status == 1 && $v_product->pro_label == 'Hot' && $i < 3 ){++$i; ?> 
                    
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>

                <?php }}?>

                </div>
              </div>
              <div class="item">
                <div class="products special-product">

                <?php $i2 = 0; $i = 0; foreach($all_product_info as $v_product){  if($v_product->publication_status == 1 && $v_product->pro_label == 'Hot' && $i < 6){  ++$i;$i2++; if($i2 > 3){ ?> 
                    
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
  
                  <?php }}}?>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                <?php $i2 = 0; $i = 0; foreach($all_product_info as $v_product){ if($v_product->publication_status == 1 && $v_product->pro_label == 'Hot' && $i < 9){  ++$i; ++$i2; if($i2 > 6){ ?> 
                    
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"> <img src="<?php echo base_url()?><?php echo $v_product->product_image ?>"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span></div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
  
                  <?php }}}?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
              </div>
              <button class="btn btn-primary form-control">Subscribe</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================================== Testimonials============================================== -->
        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
          <div id="advertisement" class="advertisement">
            <div class="item">
              <div class="avatar"><img style="border-radius:100%;" src="<?php echo base_url()?>assets/frontend/images/akt_babu.jpg" alt="Image"></div>
              <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">AKT BABU<span>AKT-Shop</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ============================================== Testimonials: END ============================================== -->
      </div>
      <!-- /.sidemenu-holder --> 
