<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Unit Price</th>
					<th class="cart-total last-item">Subtotal</th>
				</tr>
			</thead><!-- /thead -->
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="<?php echo base_url() ?>" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody id="cookieProducts">
				
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->
<div class="col-md-12 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						Sub Total:<span class="inner-left-md" id="subTotal">Tk. 0</span>
					</div>
					<div class="cart-grand-total">
						Grand Total:<span class="inner-left-md" id="grandTotal">Tk. 0</span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
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

<script>


function shoppingProductHtml(data,price){
    console.log(data)
    var html = '<tr class="miniCartItem'+data.product_id+'">';
    html +=		'<td class="romove-item"><a onclick="removeCart('+data.product_id+')" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>';
	html +=		'<td class="cart-image">';
	html +=				'<a class="entry-thumbnail" href="#">';
    html +=			    '<img src="'+baseUrl+''+data.product_image+'" alt="">';
    html +=			'</a>';
    html +=		'</td>';
    html +=		'<td class="cart-product-name-info">';
    html +=			'<h4 class="cart-product-description"><a href="#">'+data.product_name+'</a></h4>';
    html +=			'<div class="row">';
    html +=				'<div class="col-sm-4">';
    html +=					'<div class="rating rateit-small"></div>';
    html +=				'</div>';
    html +=				'<div class="col-sm-8">';
    html +=					'<div class="reviews">(06 Reviews)</div>';
    html +=				'</div>';
    html +=			'</div>';
    html +=			'<div class="cart-product-info">';
    html +=				'<span class="product-color">COLOR:<span>Blue</span></span>';
    html +=			'</div>';
    html +=		'</td>';
    html +=		'<td class="cart-product-quantity">';
    html +=			'<div class="quant-input">';
    html +=	                '<input type="number" min="1" max="10" value="'+data.qty+'" onchange="updateQty('+data.product_id+',$(this).val())">';
    html +=              '</div>';
	html +=         '</td>';
	if(data.product_new_price > 0){

		html +=		'<td class="cart-product-sub-total"><span class="cart-sub-total-price">Tk. '+data.product_new_price+'</span></td>';
	}else{
		html +=		'<td class="cart-product-sub-total"><span class="cart-sub-total-price">Tk. '+data.product_price+'</span></td>';

	}
    html +=		'<td class="cart-product-grand-total"><span class="cart-grand-total-price">Tk. '+price+'</span></td>';
    html +=	'</tr>';

    return html;
}
</script>