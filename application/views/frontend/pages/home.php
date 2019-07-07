<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <?php
        $this->load->view('frontend/categoriesAside');
      ?>
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(<?php echo base_url()?>assets/frontend/images/sliders/01.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Top Brands</div>
                  <div class="big-text fadeInDown-1"> New Collections </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(<?php echo base_url()?>assets/frontend/images/sliders/02.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Spring 2016</div>
                  <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 
          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section featured-product wow fadeInUp" style="margin-top:30px">
            <h3 class="section-title">Featured products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <?php foreach($all_product_info as $v_product){ if($v_product->is_featured == 1 && $v_product->publication_status == 1 ){?>
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><img  src="<?php echo base_url()?><?php echo $v_product->product_image ?>" alt="" style="height:189px"></a> </div>
                      <!-- /.image -->
                        <?php if($v_product->product_quantity < 1){?>
                          <div class="tag sale"><span>Sold</span></div>
                        <?php }else if($v_product->pro_label == !null){?>
                          <div class="tag hot"><span><?php echo $v_product->pro_label; ?></span></div>
                        <?php } ?>
                      
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="#"><?php echo $v_product->product_name ?></a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span> <?php if($v_product->product_new_price > 0){ ?><span class="price-before-discount">Tk. <?php echo $v_product->product_price;?> </span> <?php } ?> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)" >
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
            <?php } } ?>
              
              <!-- /.item -->
              <!-- /.item --> 
            </div>
            <!-- /.home-owl-carousel --> 
          </section>
          <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="<?php echo base_url()?>assets/frontend/images/banners/home-banner1.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="<?php echo base_url()?>assets/frontend/images/banners/home-banner2.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
<!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">New Arrivals</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          <?php $i = 0 ; foreach($all_product_info as $v_product){ if($v_product->publication_status == 1 && $i < 15){ $i++ ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><img  src="<?php echo base_url()?><?php echo $v_product->product_image ?>" alt="" style="height:189px"></a> </div>
                    <!-- /.image -->
                      <?php if($v_product->product_quantity < 1){?>
                        <div class="tag sale"><span>Sold</span></div>
                      <?php }else if($v_product->pro_label == !null){?>
                        <div class="tag hot"><span><?php echo $v_product->pro_label; ?></span></div>
                      <?php } ?>
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="#"><?php echo $v_product->product_name ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span> <?php if($v_product->product_new_price > 0){ ?><span class="price-before-discount">Tk. <?php echo $v_product->product_price;?> </span> <?php } ?> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)" >
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
          <?php } } ?>      

          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->


        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="<?php echo base_url()?>assets/frontend/images/banners/home-banner.jpg" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">New Mens Fashion<br>
                      <span class="shopping-needs">Save up to 40% off</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
              <!-- <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
              <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> -->
              <?php 
              foreach($all_category_info as $v_cate){ if($v_cate->publication_status == 1){?>
                  <li><a data-transition-type="backSlide" href="#newCarousel<?php echo $v_cate->category_id; ?>" data-toggle="tab"><?php echo $v_cate->category_name; ?></a></li>
              <?php } }?>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                <?php foreach($all_product_info as $v_product){ if($v_product->publication_status == 1){ ?>
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><img  src="<?php echo base_url()?><?php echo $v_product->product_image ?>" alt="" style="height:189px"></a> </div>
                          <!-- /.image -->
                          <?php if($v_product->product_quantity < 1){?>
                            <div class="tag sale"><span>Sold</span></div>
                          <?php }else if($v_product->pro_label == !null){?>
                            <div class="tag hot"><span><?php echo $v_product->pro_label; ?></span></div>
                          <?php } ?>
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#"><?php echo $v_product->product_name ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span> <?php if($v_product->product_new_price > 0){ ?><span class="price-before-discount">Tk. <?php echo $v_product->product_price;?> </span> <?php } ?> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                <?php } }?>
                  <!-- /.item -->
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->

            <?php 
              foreach($all_category_info as $v_cate){ if($v_cate->publication_status == 1){?>
                  <div class="tab-pane" id="newCarousel<?php echo $v_cate->category_id; ?>">
                    <div class="product-slider">
                      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                      <?php foreach($all_product_info as $v_product){ if($v_product->category_id == $v_cate->category_id && $v_product->publication_status == 1 ){?>
                        
                        <div class="item item-carousel">
                          <div class="products">
                            <div class="product">
                              <div class="product-image">
                                <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><img  src="<?php echo base_url()?><?php echo $v_product->product_image ?>" alt="" style="height:189px"></a> </div>
                                <!-- /.image -->
                                <?php if($v_product->product_quantity < 1){?>
                                  <div class="tag sale"><span>Sold</span></div>
                                <?php }else if($v_product->pro_label == !null){?>
                                  <div class="tag hot"><span><?php echo $v_product->pro_label; ?></span></div>
                                <?php } ?>
                                
                              </div>
                              <!-- /.product-image -->
                              
                              <div class="product-info text-left">
                                <h3 class="name"><a href="#"><?php echo $v_product->product_name ?></a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> <span class="price"> Tk. <?php if($v_product->product_new_price > 0){ echo $v_product->product_new_price;}else{ echo $v_product->product_price;} ?></span> <?php if($v_product->product_new_price > 0){ ?><span class="price-before-discount">Tk. <?php echo $v_product->product_price;?> </span> <?php } ?> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                              <!-- /.product-info -->
                              <div class="cart clearfix animate-effect">
                                <div class="action">
                                  <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)" >
                                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                      <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                  </ul>
                                </div>
                                <!-- /.action --> 
                              </div>
                              <!-- /.cart --> 
                            </div>
                            <!-- /.product --> 
                            
                          </div>
                          <!-- /.products --> 
                        </div>
                        
                      <?php } } ?>

                        <!-- /.item -->
                      </div>
                      <!-- /.home-owl-carousel --> 
                    </div>
                    <!-- /.product-slider --> 
                  </div>
              <?php } } ?>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
        <?php foreach($all_brand as $v_brand){ ?> 
          <div class="item m-t-15"> <a href="#" class="image"> <img style="width:166px; height:110px" data-echo="<?php echo base_url()?><?php echo $v_brand->brand_logo?>" src="<?php echo base_url()?><?php echo $v_brand->brand_logo?>" alt=""> </a> </div>
        <?php } ?>
          <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>

