<div class="breadcrumb">
	<!-- <div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
                <li style="float:left"><a href="<?php echo base_url() ?>">Home</a></li>
                    <?php foreach($all_category_info as $v_cate){ if($product_details->category_id == $v_cate->category_id){?> <li style="float:left"><a href="#"><?php echo $v_cate->category_name ?></a></li> <?php } }?>
                    <?php foreach($all_manufacture_info as $v_manu){ if($v_manu->manufacture_id == $product_details->manufacture_id){?> <li style="float:left"><a href="#"><?php echo $v_manu->manufacture_name ?></a></li> <?php }}?>
            </ul>
            <ul class="list-inline list-unstyled" style="display:inline-flex; padding:0px"><li class='active'>/&nbsp; <?php echo $product_details->product_name ?></li></ul>
            
		</div>
	</div> -->
	<!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
            <?php
                $this->load->view('frontend/categoriesAside');
            ?>
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="aktProductSlide1">
                <a data-lightbox="image-1" data-title="Gallery" href="">
                    <img class="img-responsive" alt="" src="<?php echo base_url()?><?php echo $product_details->product_image ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_image ?>" />
                </a>
            </div>
						<?php if($product_details->product_img2 !== null){ ?> 
							<div class="single-product-gallery-item" id="aktProductSlide2">
									<a data-lightbox="image-1" data-title="Gallery" href="">
											<img class="img-responsive" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img2 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img2 ?>" />
									</a>
							</div>
						<?php }?>
						<?php if($product_details->product_img3 !== null){ ?> 
							<div class="single-product-gallery-item" id="aktProductSlide3">
									<a data-lightbox="image-1" data-title="Gallery" href="">
											<img class="img-responsive" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img3 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img3 ?>" />
									</a>
							</div>
						<?php }?>
						<?php if($product_details->product_img4 !== null){ ?> 
							<div class="single-product-gallery-item" id="aktProductSlide4">
									<a data-lightbox="image-1" data-title="Gallery" href="">
											<img class="img-responsive" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img4 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img4 ?>" />
									</a>
							</div>
						<?php }?>
						<?php if($product_details->product_img5 !== null){ ?> 
							<div class="single-product-gallery-item" id="aktProductSlide5">
									<a data-lightbox="image-1" data-title="Gallery" href="">
											<img class="img-responsive" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img5 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img5 ?>" />
									</a>
							</div>
						<?php }?>
						<!-- /.single-product-gallery-item -->

        </div>
				<!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#aktProductSlide1">
                        <img class="img-responsive" width="85" alt="" src="<?php echo base_url()?><?php echo $product_details->product_image ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_image ?>" />
                    </a>
                </div>
								<?php if($product_details->product_img2 !== null){ ?> 
									<div class="item">
											<a class="horizontal-thumb " data-target="#owl-single-product" data-slide="1" href="#aktProductSlide2">
													<img class="img-responsive" width="85" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img2 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img2 ?>" />
											</a>
									</div>
								<?php }?>
								<?php if($product_details->product_img3 !== null){ ?> 
									<div class="item">
											<a class="horizontal-thumb " data-target="#owl-single-product" data-slide="1" href="#aktProductSlide3">
													<img class="img-responsive" width="85" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img3 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img3 ?>" />
											</a>
									</div>
								<?php }?>
								<?php if($product_details->product_img4 !== null){ ?> 
									<div class="item">
											<a class="horizontal-thumb " data-target="#owl-single-product" data-slide="1" href="#aktProductSlide4">
													<img class="img-responsive" width="85" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img4 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img4 ?>" />
											</a>
									</div>
								<?php }?>
								<?php if($product_details->product_img5 !== null){ ?> 
									<div class="item">
											<a class="horizontal-thumb " data-target="#owl-single-product" data-slide="1" href="#aktProductSlide5">
													<img class="img-responsive" width="85" alt="" src="<?php echo base_url()?><?php echo $product_details->product_img5 ?>" data-echo="<?php echo base_url()?><?php echo $product_details->product_img5 ?>" />
											</a>
									</div>
								<?php }?>
            </div>
						<!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo $product_details->product_name?></h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(13 Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-2">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">In Stock</span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								<?php echo $product_details->product_short_description?>
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
										<?php if($product_details->product_new_price > 0){ ?> <span class="price"> Tk. <?php echo $product_details->product_new_price?></span> <span class="price-strike">Tk. <?php echo $product_details->product_price; ?></span> <?php }else{ ?> <span class="price"> Tk. <?php echo $product_details->product_price?></span> <?php }?>
											
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" onclick="addToWishlist(<?php echo $product_details->product_id?>)" >
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Qty :</span>
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
								                <input type="text" value="1">
							              </div>
							            </div>
									</div>

									<div class="col-sm-7" onclick="addToCart(<?php echo $product_details->product_id?>)" >
										<a class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">TAGS</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text"><?php echo $product_details->product_long_description?></p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>

											<div class="reviews">
												<div class="review">
													<div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
													<div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
																										</div>
											
											</div><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										

										
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
																<td class="cell-label">Quality</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Price</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Value</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->
											
											<div class="review-form">
												<div class="form-container">
													<form role="form" class="cnt-form">
														
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Your Name <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputName" placeholder="">
																</div><!-- /.form-group -->
																<div class="form-group">
																	<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>
																	<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">Product Tags</h4>
										<form role="form" class="form-inline form-cnt">
											<div class="form-container">
									
												<div class="form-group">
													<label for="exampleInputTag">Add Your Tags: </label>
													<input type="email" id="exampleInputTag" class="form-control txt">
													

												</div>

												<button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
											</div><!-- /.form-container -->
										</form><!-- /.form-cnt -->

										<form role="form" class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
        <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">related products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          <?php $i = 0 ; foreach($all_product_info as $v_product){ if($v_product->category_id == $product_details->category_id && $v_product->publication_status == 1 && $i < 15){ $i++ ?>
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
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
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
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
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
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 	</div><!-- /.container -->
</div><!-- /.body-content -->